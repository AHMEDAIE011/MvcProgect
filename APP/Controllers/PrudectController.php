<?php

namespace APP\Controllers;

use APP\Models\Image;
use APP\Models\Product;
use APP\Models\Service;

class PrudectController
{
    protected $auth;

    public function __construct()
    {
        $this->auth = app()->session->get('user');
        if (empty($this->auth)) {
            app()->session->setFlash('errors', ['ErrorEmail' => 'the email is not sccess']);
            redirect('/login');
        }
    }

    // return viewAdmin('admin.home');
    public function index()
    {
        $products = Product::all();
        $services = Service::all();

        return viewAdmin('admin.dashboard.products.all', compact('products', 'services'));
    }

    public function add()
    {
        $validator = Validator();
        $validator->setRules([
            'name' => 'required|between:8,132',
            'title' => 'required|between:8,132',
            'details' => 'required|between:20,1000',
            'serviceID' => 'required',
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        Product::create([
            'name' => request('name'),
            'details' => request('details'),
            'title' => request('title'),
            'service_id' => request('serviceID'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }

    public function update()
    {
        $validator = Validator();
        $validator->setRules([
            'name' => 'required|between:8,132',
            'title' => 'required|between:8,132',
            'details' => 'required|between:20,1000',
            'serviceID' => 'required',
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        Product::update(request('id'), [
            'name' => request('name'),
            'details' => request('details'),
            'title' => request('title'),
            'service_id' => request('serviceID'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }

    public function delete()
    {
        if (is_numeric(request()->get('id'))) {
            $images = Image::where(['product_id', '=', request()->get('id')]);
            if ($images) {
                app()->session->setFlash('errorImages', 'please Drop All Images And delete this row');

                return back();
            }
            Product::delete(request()->get('id'));

            return back();
        }
    }

    public function img()
    {
        $images = Image::where(['product_id', '=', request()->get('id')]);

        return viewAdmin('admin.dashboard.products.images.all', compact('images'));
        // print_r($images);
    }

    public function add_img()
    {
        $dir = public_path().'site/assets/img/portfolio/';
        $ext = pathinfo($_FILES['name']['name'], PATHINFO_EXTENSION);
        $name = time().'.'.$ext;
        $File_name = $dir.$name;

        if (empty($_FILES['name']['name'])) {
            app()->session->setFlash('errors', 'The file is empty');

            return back();
        }
        move_uploaded_file($_FILES['name']['tmp_name'], $File_name);
        Image::create([
            'name' => $name,
            'product_id' => request('id'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }

    public function update_img()
    {
        if (empty($_FILES['name']['name'])) {
            app()->session->setFlash('errors', 'The file is empty');

            return back();
        }
        $dir = public_path().'site/assets/img/portfolio/';
        $oldName = $dir.request('oldName');
        $ext = pathinfo($_FILES['name']['name'], PATHINFO_EXTENSION);
        $name = time().'.'.$ext;
        $File_name = $dir.$name;

        if (file_exists($oldName)) {
            if (unlink($oldName)) {
                Image::delete(request('delete'));
                move_uploaded_file($_FILES['name']['tmp_name'], $File_name);
                Image::create([
                    'name' => $name,
                    'product_id' => request('id'),
                ]);

                app()->session->setFlash('success', 'savid sucessfully :D');
            }
        }

        return back();
    }

    public function delete_img()
    {
        if (is_numeric(request()->get('id'))) {
            Image::delete(request()->get('id'));

            return back();
        }
    }
}
