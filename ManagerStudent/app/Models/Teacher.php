<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id','name','gender','age','address','gmail'];
   

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}     
