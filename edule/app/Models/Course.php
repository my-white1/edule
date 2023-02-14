<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'month',
        'image',
        'description',
        'Certificate',
        'course_certificate',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
