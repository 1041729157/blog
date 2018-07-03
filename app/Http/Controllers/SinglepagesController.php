<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglepagesController extends Controller
{
    public function details()
    {
    	return view('singlepages.details');
    }
}
