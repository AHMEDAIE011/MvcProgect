<?php

namespace APP\Controllers;

class AdminController
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
        return viewAdmin('admin.home');
    }
}
