<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Package, Subscription};
use Exception;
use Validator;


class PackagesController extends Controller
{

    /**
     * Admin customers page view
     */
    public function index($limit = 20)
    {
        return view('admin.packages.index', ['title' => 'T-Wireless | All Packages', 'packages' => Package::paginate($limit)]);
    }

    /**
     * 
     * @return json
     */
    public function add()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'price' => ['required'],
            'name' => ['required'],
            'duration' => ['required'],
            'speed' => ['required'],
            'setup_fee' => ['required'],
            'devices' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $package = Package::create([
                'duration' => $data['duration'],
                'name' => $data['name'],
                'setup_fee' => $data['setup_fee'],
                'speed' => $data['speed'],
                'bandwidth' => 'Unlimited',
                'price' => $data['price'],
                'devices' => $data['devices'],
                'period' => $data['period'] ?? '',
            ]);

            if (empty($package)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Operation failed',
                ]); 
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

    /**
     * @return view
     */
    public function subscriptions($id = 0)
    {
        $subscriptions = Subscription::where(['plan_id' => $id])->paginate(20);
        return view('admin.packages.subscriptions', ['subscriptions' => $subscriptions, 'id' => $id]);
    }

    /**
     * 
     * @return json
     */
    public function edit($id = 0)
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'price' => ['required'],
            'name' => ['required'],
            'duration' => ['required'],
            'speed' => ['required'],
            'setup_fee' => ['required'],
            'devices' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $package = Package::find($id);
            if (empty($package)) {
                return response()->json([
                    'status' => 0,
                    'info' => 'Invalid Package',
                ]); 
            }

            $package->duration = $data['duration'];
            $package->name = $data['name'];
            $package->setup_fee = $data['setup_fee'];
            $package->speed = $data['speed'];
            $package->bandwidth = 'Unlimited';
            $package->price = $data['price'];
            $package->devices = $data['devices'];
            $package->period = $data['period'] ?? '';
            
            if ($package->update()) {
                return response()->json([
                    'status' => 1,
                    'info' => 'Operation successful',
                    'redirect' => ''
                ]);
            }

            return response()->json([
                'status' => 0,
                'info' => 'Operation failed',
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
