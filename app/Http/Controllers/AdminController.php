<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin.users');
    }
    public function projects()
    {
        if (Gate::allows('is_admin')) {
                return view('admin.projects');
        }
       abort(404);
    }
}
