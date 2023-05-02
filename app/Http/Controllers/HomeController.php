<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\State;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    
}
