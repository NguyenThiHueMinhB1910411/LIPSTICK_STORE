<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_products';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps=false;
    protected $fillable = ['id_products', 'id_category', 'name_products', 'price', 'image'];
}