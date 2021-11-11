<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function teacher(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }

    public function getDateAttribute($value)
    {
        return ucfirst($value);
    }
}
