<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\{Customer, Notification};
use Illuminate\Support\Str;
use Exception;
use Mail;
use Validator;


class NotificationsController extends Controller
{
    /**
     * Admin notifications page view
     */
    public function index($limit = 20)
    {
        return view('admin.notifications.index', ['title' => 'T-Wireless | All Notifications', 'notifications' => Customer::latest('id')->paginate($limit)]);
    }

    /**
     * @param $request
     * 
     * @return json
     */
    public function send($customer_id = 0)
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'type' => ['required', 'string'], 
            'body' => ['required', 'string'], 
            'title' => ['required', 'string']
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
            if ($type === 'sms') {
                $sent = empty($user->phone) ? false : \App\Library\Sms::send($user->phone, $body);
            }else {

            }

            $notificaion = Notification::create([
                'type' => $type,
                'customer_id' => $customer_id,
                'sent' => false,
                'body' => $body,
                'title' => $data['title'] ?? null
            ]);

            $token = Str::random(64);
            if (!empty($email)) {
                $verify = Verification::create([
                    'type' => 'email',
                    'expiry' => now()->addDays(2),
                    'user_id' => $user_id,
                    'token' => $token,
                ]);

                $mail = new EmailVerification([
                    'email' => $email, 
                    'token' => $token,
                ]);

                Mail::to($email)->send($mail);
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
