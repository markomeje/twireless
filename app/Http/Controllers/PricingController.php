<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('frontend.pricing.index')->with(['title' => 'Our Pricing | T-Wireless']);
    }
}
