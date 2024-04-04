<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function addUser()
    {
        return view('add-user');
    }

    public function userList()
    {
        return view('user-list');
    }
}
