<?php

namespace App\Library;
use \AfricasTalking\SDK\AfricasTalking;


class Sms 
{

	public static function send($phone = 0, $message = '')
	{
		if (empty($hpone) || empty($message)) {
			return [];
		}

		$AT = new AfricasTalking(env('AFRCASTALKING_USERNAME'), env('AFRICASTALKING_API_KEY'));
		return $AT->sms()->send([
		    'to' => $phone,
		    'message' => $message
		]);
	}

}









