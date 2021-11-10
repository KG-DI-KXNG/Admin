<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class);
    }
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
    public function group(){
        return $this->hasMany(Group::class);
    }
}
