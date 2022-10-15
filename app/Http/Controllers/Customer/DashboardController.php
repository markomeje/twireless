<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * About page view
     */
    public function index()
    {
        return view('customer.dashbard.index');
    }
}
