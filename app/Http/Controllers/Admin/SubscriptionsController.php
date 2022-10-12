<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subscription;

class SubscriptionsController extends Controller
{
    /**
     * Admin subscriptions page view
     */
    public function index()
    {
        return view('admin.subscriptions.index', ['subscriptions' => Subscription::paginate(20)]);
    }
}
