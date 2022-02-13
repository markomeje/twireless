<?php

namespace App\Http\Controllers;
use App\Models\{Category, Property};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index')->with(['title' => 'Fastest Internet Service Provider | T-Wireless']);
    }
}
