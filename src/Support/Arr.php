<?php

namespace SecTheater\Support;

class Arr
{
    public static function only($array, $keys)
    {
        // array_intersect_key بتاخداراي وكي
        // الاراي بيكون اللي هبحث فيها
        // ا      الكي بيكون عن اراي اللي هبحث بيها ف الاراي الاولي
        // شكلها كالتالي
        // Arr::only(['username'=> 'ahmed','email'=> 'ahmed@gmail.com'],'username')
        // ----------------------------------
        // array_flip بتحول الكي الي فاليوا
        // ----------------------------------
        // (array) لو الكي اللي داخل مش اراي خليه اراي
        return array_intersect_key($array, array_flip((array) $keys));
    }

    // هل الفاليواللي داخله عباره عن اراي ام لا
    public static function accessible($value)
    {
        return is_array($value) || $value instanceof \ArrayAccess;
    }

    public static function exists($array, $key)
    {
        if ($array instanceof \ArrayAccess) {
            return $array->offsetExists($key);
        }

        return array_key_exists($key, $array);
    }

    public static function set(&$array, $key, $value)
    {
        if (is_null($key)) {
            return $array = $value;
        }

        $keys = explode('.', $key);

        while (count($keys) > 1) {
            $key = array_shift($keys);

            if (!isset($array[$key]) || !is_array($array[$key])) {
                $array[$key] = [];
            }

            $array = &$array[$key];
        }

        $array[array_shift($keys)] = $value;

        return $array;
    }

    public static function add($array, $key, $value)
    {
        if (is_null(static::get($array, $key))) {
            static::set($array, $key, $value);
        }

        return $array;
    }

    public static function except($array, $keys)
    {
        static::forget($array, $keys);

        return $array;
    }

    public static function first($array, callable $callback = null, $default = null)
    {
        if (is_null($callback)) {
            if (empty($array)) {
                return value($default);
            }

            foreach ($array as $item) {
                return $item;
            }
        }

        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return call_user_func($callback, $value, $key);
            }
        }

        return value($default);
    }

    public static function has($array, $keys)
    {
        if (is_null($keys)) {
            return false;
        }

        $keys = (array) $keys;

        if (!$array) {
            return false;
        }

        if ($keys === []) {
            return false;
        }

        foreach ($keys as $key) {
            $subKeyArray = $array;

            // معناها ان لو الكي بالشكل التالي
            // Arr::has(['database'],'database')
            // continue;   اعمل
            //  لان الداتابيز ليس داخلها اراي اخري
            if (static::exists($array, $key)) {
                continue;
            }
            // معناها ان لو الكي بالشكل التالي
            // Arr::has(['db' => ['coon' => ['def' => 'my sql']]], 'db.coon.def');
            foreach (explode('.', $key) as $segment) {
                if (static::accessible($subKeyArray) && static::exists($subKeyArray, $segment)) {
                    $subKeyArray = $subKeyArray[$segment];
                } else {
                    return false;
                }
            }
        }

        return true;
    }

    public static function last($array, callable $callback = null, $default = null)
    {
        if (is_null($callback)) {
            return empty($array) ? value($default) : end($array);
        }

        // array_reverse   تعكس الاراي حيث يكون الاول مكان الاخير

        return static::first(array_reverse($array, true), $callback, $default);
    }

    public static function flatten($array, $depth = INF)
    {
        $result = [];

        foreach ($array as $item) {
            if (!is_array($item)) {
                $result[] = $item;
            } elseif ($depth === 1) {
                $result = array_merge($result, array_values($item));
            } else {
                $result = array_merge($result, static::flatten($item, $depth - 1));
            }
        }

        return $result;
    }

    // $arr = ['db' => ['coon' => ['def' => 'my_sql']]];
    // Arr::forget($arr, 'db.coon.def');//  هتمسح الليانتكاتبه ف ال كي
    // var_dump($arr);
    public static function forget(&$array, $keys)
    {
        $original = &$array;

        $keys = (array) $keys;

        if (count($keys) === 0) {
            return;
        }

        foreach ($keys as $key) {
            // if the exact key exists in the top-level, remove it
            if (static::exists($array, $key)) {
                unset($array[$key]);

                continue;
            }

            $parts = explode('.', $key);

            // clean up before each pass
            $array = &$original;

            while (count($parts) > 1) {
                $part = array_shift($parts);

                if (isset($array[$part]) && is_array($array[$part])) {
                    $array = &$array[$part];
                } else {
                    continue 2;
                }
            }

            unset($array[array_shift($parts)]);
        }
    }

    public static function get($array, $key, $default = null)
    {
        if (!static::accessible($array)) {
            return value($default);
        }

        if (is_null($key)) {
            return $array;
        }

        if (static::exists($array, $key)) {
            return $array[$key];
        }

        if (mb_strpos($key, '.') === false) {
            return $array[$key] ?? value($default);
        }

        foreach (explode('.', $key) as $segment) {
            if (static::accessible($array) && static::exists($array, $segment)) {
                $array = $array[$segment];
            } else {
                return $default;
            }
        }

        return $array;
    }
}
