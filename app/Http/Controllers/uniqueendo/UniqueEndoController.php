<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniqueEndoController extends Controller
{
    public function home()
    {
        return view('uniqueendo.home');
    }


    public function about()
    {
        return view('uniqueendo.about');
    }


    public function contact()
    {
        return view('uniqueendo.contact');
    }


    public function gallery()
    {
        return view('uniqueendo.gallery');
    }


    public function appointment()
    {
        return view('uniqueendo.appointment');
    }
}
