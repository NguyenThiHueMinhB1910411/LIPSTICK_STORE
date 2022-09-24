<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// class invoice_details extends Model
// {
//     protected $table = 'invoice_details';
//     protected $primaryKey = ['id_invoice_details', 'id_products'];
//     public $incrementing = false;
//     protected $keyType = ['int', 'string'];
//     protected $fillable = ['id_invoice_details', 'number_receipt', 'id_products'];
// }

class detail_receipt extends Model
{
    protected $table = 'detail_receipt';
    protected $primaryKey = ['id_receipt', 'id_products'];
    protected $fillable = ['id_receipt', 'id_products', 'number_products'];
    public $timestamps = false; // table có 2 cột update_at & create_at ?
    public $incrementing = false; // primaryKey có tự tăng ?
    protected $keyType = ['int', 'string'];
}