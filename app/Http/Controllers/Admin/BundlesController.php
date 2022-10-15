<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Bundle;
use Exception;
use Validator;


class BundlesController extends Controller
{

    /**
     * Admin customers page view
     */
    public function index($limit = 20)
    {
        return view('admin.bundles.index', ['title' => 'T-Wireless | All Bundles', 'bundles' => Bundle::paginate($limit)]);
    }

    /**
     * 
     * @return json
     */
    public function add()
    {
        $data = request()->all();
        $validator = Validator::make($data, [ 
            'size' => ['required', 'string'], 
            'price' => ['required'],
            'duration' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

        try {
            $bundle = Bundle::create([
                'size' => $data['size'],
                'duration' => $data['duration'],
                'price' => $data['price'],
            ]);

            if (empty($bundle)) {
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
