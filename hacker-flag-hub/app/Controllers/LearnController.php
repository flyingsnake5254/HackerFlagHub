<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LearnController extends BaseController
{
    public function index()
    {
        return view('learn');
    }
}
