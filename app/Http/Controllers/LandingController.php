<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingController extends Controller
{
    public function index()
    {
        return view("landing.home");
    }

    public function be()
    {
        $jsonString = file_get_contents(base_path('public\bio\be.json'));
        $data = json_decode($jsonString, true);
        $bio = $data;
        // dd($data);
        return view("landing.be", compact("bio"));
    }

    public function dp()
    {
        $jsonString = file_get_contents(base_path('public\bio\dp.json'));
        $data = json_decode($jsonString, true);
        $bio = $data;
        return view("landing.dp", compact('bio'));
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

    public function tree()
    {
        return view("tree");
    }

    public function sekretariat()
    {
        $jsonString = file_get_contents(base_path('public\bio\sekre.json'));
        $data = json_decode($jsonString, true);
        $bio = $data;
        return view("landing.sekretariat", compact('bio'));
    }
}
