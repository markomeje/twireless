<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Sector;

class SectorsController extends Controller
{
    /**
     * Admin sectors page view
     */
    public function index()
    {
        return view('admin.sectors.index', ['title' => 'All Sectors', 'sectors' => Sector::paginate(16)]);
    }

    /**
     * Admin sector page view
     */
    public function sector($id = 0)
    {
        return view('admin.sectors.sector', ['sector' => Sector::find($id)]);
    }
}
