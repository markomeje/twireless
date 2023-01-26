<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'plan',
    ];

    /**
     * A Sector may have many subscriptions
     */
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
