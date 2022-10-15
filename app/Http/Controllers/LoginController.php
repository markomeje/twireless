<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Validator;

class LoginController extends Controller
{

    /**
     * Login View
     * 
     * @return void
     */
    public function index()
    {
        return view('frontend.login.index')->with(['title' => 'Login | T-Wireless']);
    }

    /**
     * Ajax Login
     * 
     */
    public function auth()
    {
        $data = request()->only(['email', 'password']);
        $validator = Validator::make($data, [
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        $user = User::where(['email' => $data['email']])->first();
        if (empty($user)) {
            return response()->json([
                'status' => 0,
                'info' => 'Invalid login details.'
            ]);
        }

        if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']])) {
            request()->session()->regenerate();
            $redirect = auth()->user()->role === 'admin' ? route('admin.dashboard') : route('customer.dashboard');

            return response()->json([
                'status' => 1,
                'info' => 'Operation successful.', 
                'redirect' => $redirect,
            ]);
        }

        return response()->json([
            'status' => 0,
            'info' => 'Invalid login details'
        ]);
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->invalidate();
        return redirect()->route('login');
    }

}
