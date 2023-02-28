<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Library\Sms;
use Exception;
use Validator;

class SmsController extends Controller
{
    /**
     * Send sms
     */
    public function send()
    {
        $data = request()->all();
        $validator = Validator::make($data, [  
            'message' => ['required', 'string', 'max:500'], 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        if (empty($data['phones']) || !is_array($data['phones'])) {
            return response()->json([
                'status' => 0,
                'info' => 'Invalid phone numbers.'
            ]);
        }

        $message = $data['message'];
        $notification = Notification::create([
            'type' => 'sms',
            'customer_id' => 00000,
            'sent' => false,
            'message' => $message
        ]);

        $sms = Sms::send([
            'phones' => $data['phones'], 
            'message' => $message
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
            'info' => $sms['info']
        ]);
    }

}









