<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SuperAdminController extends BaseController
{
    public function SuperAdminHome()
    {
        return view('/index');
    }
    public function createCompany()
    {
        return view('create-company');
    }
    public function CompanyList()
    {
        return view('company-list');
    }

}
