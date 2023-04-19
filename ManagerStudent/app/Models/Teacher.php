<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['courses_id','name','image','age','gender','address','gmail'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
