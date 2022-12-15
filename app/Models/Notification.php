<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'customer_id',
        'sent',
        'message',
        'title',
    ];

    /**
     * Notificaion types
     * 
     * @return array
     */
    public static $types = [
        'sms', 
        'email'
    ];
}











