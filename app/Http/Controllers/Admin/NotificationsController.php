<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\{Customer, Notification};
use App\Mail\SubscriptionNotification;
use Illuminate\Support\Str;
use App\Library\Sms;
use Exception;
use Mail;
use Validator;

class NotificationsController extends Controller
{
    /**
     * Admin notifications page view
     * 
     */
    public function index($limit = 20)
    {
        return view('admin.notifications.index', ['title' => 'T-Wireless | All Notifications', 'notifications' => Notification::latest('id')->paginate($limit)]);
    }

    /**
     * @param $customer_id
     * 
     * @return json
     */
    public function send($customer_id = 0)
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'type' => ['required', 'string'], 
            'body' => ['required', 'string'], 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $type = strtolower($data['type'] ?? '');
            if (!in_array($type, Notification::$types)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid notification type.'
                ]);
            }

            $customer = Customer::find($customer_id);
            if (empty($customer)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Unknown Error. Try Again.'
                ]);
            }

            $user = $customer->user;
            $body = $data['body'];

            $notification = Notification::create([
                'type' => $type,
                'customer_id' => $customer_id,
                'sent' => false,
                'message' => $body
            ]);

            if ($type === 'sms') {
                if (empty($user->phone)) {
                    return response()->json([
                        'status' => 0,
                        'info' => 'User email not found.'
                    ]);
                }

                $sms = Sms::send([
                    'phone' => $user->phone, 
                    'message' => $body
                ]);

                if ($sms['status'] !== 1) {
                    return response()->json([
                        'status' => 0,
                        'info' => $sms['info']
                    ]);
                }

                $notification->sent = true;
                $notification->update();

                return response()->json([
                    'status' => 1,
                    'info' => $sms['info'],
                    'redirect' => ''
                ]);
            }

            if (empty($user->email)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'User email not found.'
                ]);
            }

            $mail = new SubscriptionNotification([ 
                'message' => $body,
            ]);

            Mail::to('markomejeonline@gmail.com')->send($mail);
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
