<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_category', 'name_category'];
}
