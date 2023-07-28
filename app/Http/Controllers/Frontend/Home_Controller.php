<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    function index()
    {
        return view('frontend.layouts.index');
    }

    function details()
    {
        return view('frontend.layouts.details');
    }

    function browse()
    {
        return view('frontend.layouts.browse');
    }

    function stream()
    {
        return view('frontend.layouts.stream');
    }
}
