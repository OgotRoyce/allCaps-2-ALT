<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'description',
        'logo',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(Student::class, 'user_id');
    }
}
