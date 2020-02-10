<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function book()
    {
        return view('site.booknow');
    }

    public function about()
    {
        return view('site.about');
    }
}
