<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
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
        'plan_id',
        'start_date',
        'expiry_date',
        'antenna',
        'polewire_length',
        'coordinate',
        'last_mile',
        'concurrent_users',
        'active',
        'installation_date',
        'subscribed_by',
        'subscriber_type',
        'additional_info',
        'status',
        'sector_id',
        'router',
        'deleted',
        'deleted_at',
        'renewals',
    ];

    /**
     * A Subscription must belong to a customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
     * A Subscription must belong to a bundle
     */
    public function bundle()
    {
        return $this->belongsTo(Bundle::class, 'plan_id');
    }

    /**
     * A Subscription must belong to a package
     */
    public function package()
    {
        return $this->belongsTo(Package::class, 'plan_id');
    }

    /**
     * A Subscription must belong to a sector
     */
    public function sector()
    {
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    /**
     * A Subscription must belong to a payment
     */
    public function payment($product)
    {
        return $this->hasOne(Payment::class, 'product_id')->where(['status' => 'paid', 'product' => $product])->first();
    }

}
