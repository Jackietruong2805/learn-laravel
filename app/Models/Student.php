<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // // protected $table = 'stdnt';
    // protected $primaryKey = 'student_id';
    // public $timestamps = false;
    public function rPhone(){
        return $this->hasMany(Phone::class);
    }
}
