<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //

    public function index()
    {
        # code...

        return view('welcome');
    }

    public function test()
    {
        # code...
        return view('test');

    }
}
