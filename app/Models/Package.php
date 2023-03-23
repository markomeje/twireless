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
        'setup_fee',
        'speed',
        'bandwidth',
        'connections',
        'period',
        'duration',
        'active',
        'devices'
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

    /**
     * A Package may have many subscriptions
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'plan_id');
    }
}
