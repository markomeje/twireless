<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Plan;

class PlansController extends Controller 
{
    /**
     * Admin plans page view
     */
    public function index()
    {
        return view('admin.plans.index', ['plans' => Plan::paginate(20)]);
    }
}
