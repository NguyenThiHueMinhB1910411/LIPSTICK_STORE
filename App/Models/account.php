<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// class account extends Model
// {
//     protected $table = 'account';
//     protected $primaryKey = 'email';
//     public $incrementing = false;
//     protected $keyType = 'string';
//     protected $fillable = ['email', 'name_account', 'password'];

//     public static function validate(array $data)
//     {
//         $errors = [];

//         if (!$data['email']) {
//             $errors['email'] = 'Invalid email.';
//         } elseif (static::where('email', $data['email'])->count() > 0) {
//             $errors['email'] = 'Email already in use.';
//         }

//         if (strlen($data['password']) < 6) {
//             $errors['password'] = 'Password must be at least 6 characters.';
//         } elseif ($data['password'] != $data['password_confirmation']) {
//             $errors['password'] = 'Password confirmation does not match.';
//         }

//         return $errors;
//     }
// }

class account extends Model
{
    protected $table = 'account';
    protected $fillable = ['email', 'password'];
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $typeKey = 'string';
    public $timestamps = false;

    public static function validate(array $data)
    {
        $errors = [];

        if (!$data['email']) {
            $errors['email'] = 'Invalid email.';
        } elseif (account::where('email', $data['email'])->count() > 0) {
            $errors['email'] = 'Email already in use.';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password must be at least 6 characters.';
        } elseif ($data['password'] != $data['password_confirmation']) {
            $errors['password'] = 'Password confirmation does not match.';
        }

        return $errors;
    }
}