<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Str;
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

    /**
     * 
     * @return json
     */
    public function add()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'amount' => ['required'],
            'type' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $payment = Payment::create([
                'type' => $data['type'],
                'amount' => $data['amount'],
                'customer_id' => $data['customer_id'],
                'product_id' => $data['subscription_id'],
                'reference' => Str::uuid(),
                'status' => 'paid',
                'product' => $data['product'],
            ]);

            if (empty($payment)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Operation failed',
                ]); 
            }

            return response()->json([
                'status' => 1,
                'info' => 'Operation successful',
                'redirect' => ''
            ]);

        } catch (Exception $error) {
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }

}