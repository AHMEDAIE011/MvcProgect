<?php

namespace APP\Controllers\auth\admin;

use APP\Models\User;
use SecTheater\Support\Hash;

class ProfileController
{
    public function index()
    {
        $data = User::where(['id', '=', UserGet(1)]);

        return viewAdmin('admin.auth.profile.profile', compact('data'));
    }

    public function store()
    {
        $validator = validator();
        $validator->setRules([
            'username' => 'required|alnum|between:8,32',
            'name' => 'required|alnum|between:8,32',
            'email' => 'required|email',
        ]);
        $validator->make(request()->all());
        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());

            return back();
        }
        User::update(9, [
            'username' => request('username'),
            'name' => request('name'),
            'email' => request('email'),
        ]);

        app()->session->setFlash('success', 'Update sucessfully :D');

        return back();
    }

    public function store_pass()
    {
        if (Hash::verify(request('OldPassword'), UserGet(4))) {
            $validator = Validator();
            $validator->setRules([
                'password' => 'required|alnum|between:8,32|confirmed',
                'password_confirmation' => 'required|alnum|between:8,32',
            ]);

            $validator->setAliases([
                'password_confirmation' => 'Password confirmation',
            ]);

            $validator->make(request()->all());
            if (!$validator->passes()) {
                app()->session->setFlash('errors', $validator->errors());

                return back();
            }

            User::update(9, [
                'password' => bcrypt(request('Password')),
            ]);

            app()->session->setFlash('success', 'Update sucessfully :D');

            return back();
        } else {
            app()->session->setFlash('errorHash', 'The Old Pass is Not Access');

            return back();
        }
    }

    public function logout()
    {
        app()->session->delete();
        redirect('/');
    }
}
