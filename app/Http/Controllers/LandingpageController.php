<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function tentangkami()
    {
        return view('landingpage.tentangkami');
    }

    public function lokasibanksampah()
    {
        return view('landingpage.lokasibanksampah');
    }

    public function artikelberita()
    {
        return view('landingpage.artikelberita');
    }
}
