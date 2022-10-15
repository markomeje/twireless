<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\DB;
use App\Models\{Customer, User, Verification};
use Illuminate\Support\Str;
use Exception;
use Hash;
use Mail;
use Validator;


class CustomersController extends Controller
{
    /**
     * Admin customers page view
     */
    public function index($limit = 20)
    {
        return view('admin.customers.index', ['title' => 'T-Wireless | All Customers', 'customers' => Customer::latest('id')->paginate($limit)]);
    }

    /**
     * @param $request
     * 
     * @return json
     */
    public function add()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'contact_name' => ['required', 'string'], 
            'state' => ['required'], 
            'email' => ['nullable', 'email', 'unique:users'], 
            'phone' => ['required', 'unique:users'],
            'address' => ['required', 'string'],
        ]);

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
                'email' => $email,
                'phone' => $data['phone'],
                'password' => Hash::make(Str::random(6)),
                'role' => 'user',
            ]);

            $user_id = $user->id ?? 0;
            Customer::create([
                'address' => $data['address'],
                'state_id' => $data['state'],
                'contact_name' => $data['contact_name'],
                'company_name' => $data['company_name'],
                'user_id' => $user_id,
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
            DB::rollBack();
            return response()->json([
                'status' => 0,
                'info' => config('app.env') === 'production' ? 'Unknown Error. Try Again.' : $error->getMessage()
            ]);
        }
    }

    /**
     * Customer Profile
     */
    public function profile($id = 0)
    {
        return view('admin.customers.profile', ['title' => 'T-Wireless | Customer Profile', 'customer' => Customer::find($id)]);
    }
}
