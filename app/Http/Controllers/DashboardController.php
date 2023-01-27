<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function users()
    {
        return view('users');
    }
    public function groups()
    {
        return view('groups');
    }
    public function assignRoles()
    {
       
        return view('assign-role');
    }
    public function projects()
    {
        return view('projects');
    }

    public function divisions()
    {
        return view('divisions');
    }
    public function categories()
    {
        return view('categories');
    }

    
    
}
