<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    //[
    //  'name' => 'John Doe',
    //  'email' => 'john@doe',
    //  'password' => 'secret',
    //  'is_admin' => true, !usuario nao tem controle so do que ta em fillable
    //]
    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}