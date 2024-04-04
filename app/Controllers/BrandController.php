<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BrandController extends BaseController
{
    public function addCrate()
    {
        return view('add-crate');
    }

    public function crateList()
    {
        return view('crate-list');
    }

}
