<?php

namespace APP\Controllers;

use APP\Models\Product;
use APP\Models\Service;

class ServiceController
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
        $services = Service::all();

        return viewAdmin('admin.dashboard.services.all', compact('services'));
    }

    public function add()
    {
        $validator = Validator();
        $validator->setRules([
            'name' => 'required|between:8,32',
            'details' => 'required|between:20,250',
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        Service::create([
            'name' => request('name'),
            'details' => request('details'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }

    public function update()
    {
        $validator = Validator();
        $validator->setRules([
            'name' => 'required|between:8,32',
            'details' => 'required|between:20,250',
        ]);
        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }
        Service::update(request('id'), [
            'name' => request('name'),
            'details' => request('details'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }

    public function delete()
    {
        if (is_numeric(request()->get('id'))) {
            $Products = Product::where(['service_id', '=', request()->get('id')]);
            if ($Products) {
                app()->session->setFlash('errorProducts', 'please Drop All Products And delete this row');

                return back();
            }
            Service::delete(request()->get('id'));

            return back();
        }
    }
}
