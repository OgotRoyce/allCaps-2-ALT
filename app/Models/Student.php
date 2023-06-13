<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;
    protected $table = 'student';
    protected $fillable = [
        'student_id',
        'account_code',
        'first_name',
        'last_name',
        'last_name',
        'email',
        'password',
        'photo',
        'adviser_id'
    ];
}
