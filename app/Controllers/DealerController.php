<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DealerController extends BaseController
{
    public function addDealer()
    {
        return view('add-dealer');
    }

    public function dealerList()
    {
        return view('dealer-list');
    }

}
