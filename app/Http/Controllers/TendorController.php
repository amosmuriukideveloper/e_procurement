<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TendorController extends Controller
{
    public function index()
    {
        return view('tendor/index');
    }
}
