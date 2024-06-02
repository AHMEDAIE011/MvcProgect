<?php

namespace APP\Controllers;

use APP\Models\Image;
use APP\Models\Product;
use APP\Models\Service;

class HomeController
{
    // return viewAdmin('admin.home');
    public function index()
    {
        $services = Service::all();

        return view('site.home', compact('services'));
    }

    public function Product_page()
    {
        $products = Product::where(['service_id', '=', request()->get('service_id')]);

        return view('site.products', compact('products'));
    }

    public function Product_info()
    {
        $product = Product::where(['id', '=', request()->get('id')]);
        $images = Image::where(['product_id', '=', request()->get('id')]);

        return view('site.info', compact('product', 'images'));
    }
}
