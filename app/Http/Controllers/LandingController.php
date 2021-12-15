<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view("landing.home");
    }

    public function be()
    {
        return view("landing.be");
    }

    public function dp()
    {
        return view("landing.dp");
    }

    public function gallery()
    {
        return view("landing.gallery");
    }

    public function about()
    {
        return view("landing.about");
    }

    public function contact()
    {
        return view("landing.contact");
    }
}
