<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Package;
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
            'period' => ['required'],
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
                'size' => $data['size'] ?? null,
                'duration' => $data['duration'],
                'name' => $data['name'],
                'setup_fee' => $data['setup_fee'],
                'speed' => $data['speed'],
                'bandwidth' => 'Unlimited',
                'price' => $data['price'],
                'devices' => $data['devices'],
                'period' => $data['period'],
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
}
