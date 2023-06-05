<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Members;


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
        return $this->belongsTo(Members::class, 'customer_id');
    }
}
