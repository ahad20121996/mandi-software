<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EmployeeController extends BaseController
{
    public function index()
    {
        return view('employee/index');
    }

    public function showProfile()
    {
        return view('employee/profile');
    }

    public function login()
    {
        return view('login');
    }
}
