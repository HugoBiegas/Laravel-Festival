<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttributionController extends Controller
{
    public function index()
    {
        return view('festival.attribution.index');
    }
    
}
