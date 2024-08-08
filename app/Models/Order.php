<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'FullName', 'Email', 'ProductName', 'AttendedBy', 'PhoneNumber', 'Address', 'Status', 'created_at'
    ];
}