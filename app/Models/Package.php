<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'price',
        'size',
        'setup_fee',
        'speed',
        'bandwidth',
        'connections',
        'period',
        'duration',
        'active',
    ];

    /**
     *
     * @var array<string>
     */
    public static $periods = [
        'monthly',
        'weekly',
        'yearly',
    ];
}
