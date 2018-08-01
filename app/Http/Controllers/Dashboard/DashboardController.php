<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // every page must have a withPage attribute to make any menu link get active class on his page in the render Dashboard.menu
        return view('Dashboard.index')->withPage('home');
    }
}

