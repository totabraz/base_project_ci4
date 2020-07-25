<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {

        echo view('private/includes/head');
        echo view('private/includes/nav');
        echo view('private/home');
        echo view('private/includes/footer');
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
