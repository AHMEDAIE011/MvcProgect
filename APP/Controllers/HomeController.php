<?php

namespace APP\Controllers;

use APP\Models\Comment;
use APP\Models\Image;
use APP\Models\Product;
use APP\Models\Service;

class HomeController
{
    // return viewAdmin('admin.home');
    public function index()
    {
        $services = Service::all();
        // $image = Image::where(['product_id', '=',  '2',  '1']);
        // echo '<pre>';
        // var_dump($image[0]->name);
        // exit;

        return view('site.home', compact('services'));
    }

    public function Product_page()
    {
        $products = Product::where(['service_id', '=', request()->get('service_id')]);

        return view('site.products', compact('products'));
    }

    public function Product_info()
    {
        $services = Service::all();
        $product = Product::where(['id', '=', request()->get('id')]);
        $images = Image::where(['product_id', '=', request()->get('id')]);
        $comments = Comment::where(['product_id', '=', request()->get('id')]);

        return view('site.info', compact('product', 'images', 'services', 'comments'));
    }

    public function postComment()
    {
        $validator = Validator();
        $validator->setRules([
            'name' => 'required|between:3,32',
            'email' => 'required|between:8,32',
            'comment' => 'required|between:20,350',
            'productID' => 'required',
        ]);

        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        Comment::create([
            'name' => request('name'),
            'email' => request('email'),
            'comment' => request('comment'),
            'product_id' => request('productID'),
        ]);

        app()->session->setFlash('success', 'savid sucessfully :D');

        return back();
    }
}
