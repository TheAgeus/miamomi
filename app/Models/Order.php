<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'FullName', 'Email', 'ShoeModel', 'ShoeSize', 'AttendedBy', 'PhoneNumber', 'Address', 'OrderType', 'Status', 'created_at'
    ];
}