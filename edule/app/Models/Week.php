<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function groups()
    {
        return $this->belongsToMany(Week::class);
    }
}
