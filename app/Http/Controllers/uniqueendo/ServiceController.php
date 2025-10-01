<?php

namespace App\Http\Controllers\uniqueendo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function endoscopy()
    {
        return view('uniqueendo.endoclinic');
    }


    public function mas()
    {
        return view('uniqueendo.minimal_access_surgery');
    }


    public function mips()
    {
        return view('uniqueendo.mips');
    }


    public function endourology()
    {
        return view('uniqueendo.endourology');
    }


    public function gendoscopy()
    {
        return view('uniqueendo.gendoscopy');
    }


    public function gen_surgery()
    {
        return view('uniqueendo.gen_surgery');
    }


}
