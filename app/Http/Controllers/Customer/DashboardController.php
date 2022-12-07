<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class DashboardController extends Controller
{
    /**
     * Client index page view
     */
    public function index()
    {
        $customer = Customer::where(['user_id' => auth()->id()])->first();
        return view('customer.dashboard.index', ['title' => 'My Dashboard', 'customer' => $customer]);
    }
}
