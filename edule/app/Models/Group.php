<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'course_id',
        'room_id',
        'start',
        'end',
    ];

    public function weeks()
    {
        return $this->belongsToMany(Week::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

   
}
