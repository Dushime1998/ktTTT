<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Product Name
        'price', // Product Price
        'sale_type', // Product Sale Type
        'shipping_method', // Shipping Method
        'product_type', // Product Type
        'description', // Product Description
        'filePath', // File Path for Product
        'fileName',
    ];
}
