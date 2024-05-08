<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;

    protected $table = 'registerusers'; // sesuaikan dengan nama tabel Anda

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
    ];
}
