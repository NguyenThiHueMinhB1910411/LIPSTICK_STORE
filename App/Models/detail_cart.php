<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_cart extends Model
{
    protected $table = 'detail_cart';
    protected $primaryKey = ['id_cart', 'id_products'];
    public $incrementing = false;
    protected $keyType = ['int', 'string'];
    protected $fillable = ['id_cart', 'id_products', 'number'];
    public $timestamps = false;
}