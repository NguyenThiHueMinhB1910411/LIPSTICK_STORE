<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// class users extends Model
// {
//     protected $table = 'users';
//     protected $fillable = ['name', 'email', 'phone'];
//     protected $foreignKey = 'email';

// }


class users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'username',
        'phone',
        'email'
    ];
    protected $foreignKey = 'email';
    public $timestamps = false;
}