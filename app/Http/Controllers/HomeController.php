<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    
}
