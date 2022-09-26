<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Admin dashboard page view
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
