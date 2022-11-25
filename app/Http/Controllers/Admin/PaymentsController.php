<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Exception;
use Validator;


class PaymentsController extends Controller
{

    /**
     * Admin Payments page view
     */
    public function index($limit = 20)
    {
        return view('admin.payments.index', ['title' => 'T-Wireless | All Payments', 'payments' => Payment::paginate($limit)]);
    }

}