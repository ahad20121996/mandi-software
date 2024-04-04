<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CustomerController extends BaseController
{
    public function addCustomer()
    {
        return view('add-customer');
    }

    public function customerList()
    {
        return view('customer-list');
    }
}
