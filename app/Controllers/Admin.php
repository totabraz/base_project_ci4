<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('private/login');
    }

    public function Login()
    {
        echo view('private/login');
    }

    public function home()
    {
        echo view('private/includes/head');
        echo view('private/includes/nav');
        echo view('private/home');
        echo view('private/includes/footer');
    }

    //--------------------------------------------------------------------

}
