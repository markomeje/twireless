<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contact_name',
        'state_id',
        'user_id',
        'company_name',
        'address',
        'designation',
        'status'
    ];

    /**
     * Customer designations
     */
    public static $designations = ['individual', 'company'];

    /**
     * A Customer must belong to a state in Nigeria
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /**
     * A Customer must belong to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * A Customer may have many subscriptions
     */
    public function subscription()
    {
        return $this->hasOne(Subscription::class, 'customer_id');
    }
}










