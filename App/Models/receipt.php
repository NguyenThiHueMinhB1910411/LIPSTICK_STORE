<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
    // protected $table = 'receipt';
    // protected $primaryKey = ['id_receipt', 'id'];
    // public $incrementing = false;
    // protected $keyType = ['int'];
    // protected $fillable = ['id_admin', 'name', 'phone', 'id', 'status_order', 'status_payment'];
    public $timestamps = false;
    protected $table = 'receipt';
    protected $primaryKey = 'id_receipt';
    protected $fillable = ['id_receipt', 'date_create_receipt', 'total', 'id', 'address', 'stastus_payment', 'status_receipt'];
}