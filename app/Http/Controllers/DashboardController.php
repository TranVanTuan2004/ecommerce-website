<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $template = 'admin.home.home';
        return view('admin.dashboard.layout', compact(['template']));
    }
}
