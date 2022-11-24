<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Exception;
use Validator;


class PackagesController extends Controller
{

    /**
     * Admin customers page view
     */
    public function index($limit = 20)
    {
        return view('admin.payments.index', ['title' => 'T-Wireless | All Packages', 'payments' => Package::paginate($limit)]);
    }

}