<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'price',
        'speed',
        'size',
        'bandwidth',
        'connections',
        'bundle_id',
        'monthly',
        'package_id',
        'duration',
        'type',
        'active',
    ];

    /**
     * Plan types
     *
     */
    public static $types = [
        'fixed',
        'quota',
    ];
}
