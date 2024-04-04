<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ReportsController extends BaseController
{
    public function showCrate()
    {
        return view('crate-reports');
    }

    public function showCustomer()
    {
        return view('customer-reports');
    }

    public function showDealer()
    {
        return view('dealer-reports');
    }

}
