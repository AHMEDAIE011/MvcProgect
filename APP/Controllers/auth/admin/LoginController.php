<?php

namespace APP\Controllers\auth\admin;

use APP\Models\User;
use SecTheater\Support\Hash;

class LoginController
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function store()
    {
        $validator = validator();
        $validator->setRules([
            'email' => 'required|email',
            'password' => 'required|alnum|between:8,32',
        ]);
        $validator->make(request()->all());
        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }
        $data = User::where(['email', '=', request('email')]);

        if ($data['0']->email == request('email')) {
            if (Hash::verify(request('password'), $data['0']->password)) {
                // echo '<pre>';
                app()->session->set('user', $data);

                return redirect('/dashboard');
            } else {
                app()->session->setFlash('errors', ['ErrorEmail' => 'the password is not sccess']);

                return back();
            }
        } else {
            app()->session->setFlash('errors', ['ErrorEmail' => 'the email is not sccess']);

            return back();
        }
    }

    public function logout()
    {
        app()->session->delete();
        redirect('/');
    }
}
