<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name', // Assuming this is supposed to be 'last_name'
        'email',
        'phone',
        'productQuantity',
        'userId', // Assuming this is supposed to be 'userId'
        'status',
        'productId',
        'productPrice',
        'ref',

    ];
}
