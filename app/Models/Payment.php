<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'amount',
        'setup_fee',
        'customer_id',
        'reference',
        'status',
        'product',
        'product_id',
    ];

    /**
     * Payment types apart from paystack
     */
    public static $types = [
        'Bank Transfer', 
        'POS', 
        'Bank Deposit',
        'Cash Payment',
    ];
}












