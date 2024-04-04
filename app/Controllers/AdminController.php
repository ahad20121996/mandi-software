<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function login()
    {
        return view('login');
    }

}
