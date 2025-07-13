<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() 
    {
        return view('pages.index');
    }

    public function business() 
    {
        return view('pages.business');
    }

    public function careers() 
    {
        return view('pages.careers');
    }

    public function contactUs() 
    {
        return view('pages.contactUs');
    }

    public function aboutUs() 
    {
        return view('pages.aboutUs');
    }

    public function vision() 
    {
        return view('pages.aboutUs.vision');
    }

    public function mission() 
    {
        return view('pages.aboutUs.mission');
    }

    public function coreValues() 
    {
        return view('pages.aboutUs.coreValues');
    }

    public function sustainability() 
    {
        return view('pages.sustainability');
    }

    public function strategicAlliance() 
    {
        return view('pages.strategicAlliance');
    }
}
