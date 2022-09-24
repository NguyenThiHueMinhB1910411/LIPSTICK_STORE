<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id_cart';
    public $incrementing = false;
    protected $fillable = ['id_cart','id'];
    public $timestamps=false;
}