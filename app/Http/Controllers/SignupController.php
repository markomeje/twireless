<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\{Http, DB};
use App\Models\{User, Verify};
use App\Helpers\{Sms};
use Illuminate\Support\Str;
use Carbon\Carbon;
use Validator;
use Hash;
use Mail;
use Exception;


class SignupController extends Controller
{

    /**
     * Singup view Page
     * 
     * @return view
     */
    public function index()
    {
        return view('frontend.signup.index')->with(['title' => 'Signup | T-Wireless']);
    }

    /**
     * @param $request
     * 
     * @return json
     */
    public function signup()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'fullname' => ['required', 'string'], 
            'state' => ['required'], 
            'email' => ['nullable', 'email', 'unique:users'], 
            'phone' => ['required', 'unique:users'], 
            'password' => ['required', 'string'],
            'retype' => ['required', 'same:password'],
            'address' => ['required', 'string'],
            'agree' => ['required', 'string'],
        ], ['retype.required' => 'Please enter a password', 'agree.required' => 'You have to agree to our terms and conditions', 'phone.required' => 'Please enter your phone number.', 'retype.same:password' => 'Retype thesame password']);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            DB::beginTransaction();
            $email = $data['email'] ?? null;
            $user = User::create([
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'role' => 'user',
            ]);

            Customer::create([
                'address' => $data['address'],
                'state_id' => $data['state'],
                'fullname' => $data['fullname'],
                'user_id' => $user->id ?? null,
            ]);

            $token = Str::string(64);
            if (!empty($email)) {
                $verify = Verification::create([
                    'type' => 'email',
                    'expiry' => Carbon::now()->addDays(5),
                    'email' => $email,
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
                'redirect' => route('email.verify', ['token' => $token]),
            ]);

        } catch (Exception $error) {
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'info' => 'Unknown Error. Try Again.'
            ]);
        }
    }


}
