<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TestController extends BaseController
{
    public function index()
    {
        return view('ter/img_hide');
    }

    public function robots()
    {
        return view('web/robots');
    }

    public function ans_page()
    {
        return view('web/saskme');
    }
}
