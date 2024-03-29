<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Subscription, Package, Bundle};
use Validator;
use Carbon\Carbon;

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
            'antenna' => ['required'],
            'polewire_length' => ['required'],
            'customer' => ['required'],
            'coordinate' => ['required'],
            'last_mile' => ['required'],
            'concurrent_users' => ['required'],
            'additional_info' => ['nullable', 'max:500'],
            'sector' => ['required'],
            'router' => ['required'],
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
                'info' => 'Invalid subscription plan',
            ]);
        }

        $plans = ['bundle', 'package'];
        [$type, $plan_id] = explode('_', $plan);
        if (!in_array($type, $plans)) {
            return response()->json([
                'status' => 0,
                'info' => 'Invalid subscription plan',
            ]);
        }

        switch ($plan) {
            case 'bundle':
                $plan = Bundle::find($plan_id);
                break;
            default:
                $plan = Package::find($plan_id);
                break;
        }

        if (empty($plan)) {
            return response()->json([
                'status' => 0,
                'info' => 'Invalid subscription plan',
            ]);
        }

        try {
            $subscription = Subscription::create([
                'plan' => $type,
                'additional_info' => $data['additional_info'] ?? '',
                'concurrent_users' => $data['concurrent_users'],
                'antenna' => $data['antenna'],
                'sector_id' => $data['sector'],
                'plan_id' => $plan->id,
                'last_mile' => $data['last_mile'],
                'coordinate' => $data['coordinate'],
                'polewire_length' => $data['polewire_length'],
                'active' => false,
                'customer_id' => $data['customer'],
                'router' => $data['router'],
                'status' => 'initialized',
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
                'redirect' => route('admin.subscription', ['id' => $subscription->id])
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
            if (empty($subscription)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid subscription'
                ]);
            }

            $plan = $subscription->plan === 'bundle' ? $subscription->bundle : $subscription->package;
            if (empty($plan)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid subscription plan',
                ]);
            }

            $subscription->start_date = Carbon::now();
            $subscription->expiry_date = Carbon::now()->addDays($plan->duration ?? 30);
            $subscription->status = 'active';
            $subscription->active = true;

            if ($subscription->update()) {
                return response()->json([
                    'status' => 1,
                    'info' => 'Operation successful',
                    'redirect' => ''
                ]);
            }

            return response()->json([
                'status' => 0,
                'info' => 'Operation failed.',
            ]);

        } catch (Exception $error) {
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }

    public function subscription($id = 0)
    {
        return view('admin.subscriptions.subscription', ['subscription' => Subscription::find($id)]);
    }

    /**
     * Activate Subscription
     * 
     * @return json
     */
    public function extend($id = 0)
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'days' => ['required', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $subscription = Subscription::find($id);
            if (empty($subscription)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid subscription'
                ]);
            }

            $subscription->expiry_date = Carbon::parse($subscription->expiry_date)->addDays($data['days']);
            $subscription->status = 'active';
            $subscription->active = true;

            if ($subscription->update()) {
                return response()->json([
                    'status' => 1,
                    'info' => 'Operation successful',
                    'redirect' => ''
                ]);
            }

            return response()->json([
                'status' => 0,
                'info' => 'Operation failed.',
            ]);

        } catch (Exception $error) {
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }

    public function search()
    {
        $query = request()->get('query');
        $subscriptions = Subscription::search(['sector.name', 'expiry_date', 'last_mile', 'router', 'customer.contact_name', 'customer.company_name', 'concurrent_users', 'start_date'], $query)->paginate();
        return view('admin.subscriptions.search')->with(['subscriptions' => $subscriptions, 'query' => $query]);
    }

    /**
     * Activate Subscription
     * 
     * @return json
     */
    public function edit($id = 0)
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'antenna' => ['required'],
            'polewire_length' => ['required'],
            'coordinate' => ['required'],
            'last_mile' => ['required'],
            'concurrent_users' => ['required'],
            'additional_info' => ['nullable', 'max:500'],
            'sector' => ['required'],
            'router' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $subscription = Subscription::find($id);
            if (empty($subscription)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid subscription'
                ]);
            }

            $subscription->antenna = $data['antenna'];
            $subscription->polewire_length = $data['polewire_length'];
            $subscription->coordinate = $data['coordinate'];
            $subscription->last_mile = $data['last_mile'];
            $subscription->concurrent_users = $data['concurrent_users'];
            $subscription->additional_info = $data['additional_info'];
            $subscription->sector_id = $data['sector'];
            $subscription->router = $data['router'];

            if ($subscription->update()) {
                return response()->json([
                    'status' => 1,
                    'info' => 'Operation successful',
                    'redirect' => ''
                ]);
            }

            return response()->json([
                'status' => 0,
                'info' => 'Operation failed.',
            ]);

        } catch (Exception $error) {
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }
}


















