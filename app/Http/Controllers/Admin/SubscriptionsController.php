<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Validator;

class SubscriptionsController extends Controller
{
    /**
     * Admin subscriptions page view
     */
    public function index()
    {
        return view('admin.subscriptions.index', ['subscriptions' => Subscription::paginate(20)]);
    }

    /**
     * 
     * @return json
     */
    public function add()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'price' => ['required'],
            'name' => ['required'],
            'duration' => ['required'],
            'speed' => ['required'],
            'setup_fee' => ['required'],
            'period' => ['required'],
            'devices' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        $plan = $data['plan'];
        if (!str_contains($plan, '_')) {
            return response()->json([
                'status' => 0,
                'info' => 'Invalid Plan',
            ]);
        }

        try {
            $subscription = Subscription::create([
                'size' => $data['size'] ?? null,
                'antenna' => $data['antenna'],
                'coordinate' => $data['coordinate'],
                'concurrent_users' => $data['concurrent_users'],
                'plan_id' => $data['plan'],
                'last_mile' => $data['last_mile'],
                'amount' => $data['amount'],
            ]);

            if (empty($subscription)) {
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

    /**
     * Activate Subscription
     * 
     * @return json
     */
    public function activate($id = 0)
    {
        try {
            $subscription = Subscription::find($id);
        } catch (Exception $error) {
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }
}
