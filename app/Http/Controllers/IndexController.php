<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('website.index');
    }
    public function about()
    {
        return view('website.about');
    }
    public function service()
    {
        return view('website.service');
    }

    public function law()
    {
        return view('website.law');
    }


}
