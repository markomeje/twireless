<?php

namespace App\Library;
use \AfricasTalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\Http;


class Sms 
{
    public static $codes = [
        100 => 'Sms Processed',
        101 => 'Sms Sent',
        102 => 'Sms Queued',
        401 => 'Risk Hold',
        402 => 'Invalid Sender Identity',
        403 => 'Invalid Phone Number',
        404 => 'Unsupported Number Type',
        405 => 'Insufficient Balance',
        406 => 'User In Blacklist',
        407 => 'Could Not Route',
        500 => 'Internal Server Error',
        501 => 'Gateway Error',
        502 => 'Rejected By Gateway'
    ];

    /**
     * Send sms facade method
     * 
     * @return json
     */
	public static function send(array $data = [])
	{
		if (empty($data['phones']) || empty($data['message'])) {
			return [
                'status' => 0,
                'info' => 'Invalid sms phone numbers or message.'
            ];
		}

		$AT = (new AfricasTalking(env('AFRICASTALKING_API_USERNAME'), env('AFRICASTALKING_API_KEY')))->sms()->send([
		    'to' => $data['phones'],
		    'message' => $data['message'],
            'username' => 'sandbox'
		]);

        $response = (array)$AT;
        if(empty($response['data']) || empty($response['status'])) {
            return [
                'status' => 0,
                'info' => 'Invalid response',
            ];
        }

        $status = strtolower($response['status']);
        if ($status === 'success') {
            $data = $response['data'];
            $result = $data->SMSMessageData;

            $message = $result->Message.' - '.self::$codes[$result->Recipients[0]->statusCode];
            return [
                'status' => 1,
                'info' => $message
            ];
        }

        return [
            'status' => 0,
            'info' => 'Operation failed',
        ];
	}

}









