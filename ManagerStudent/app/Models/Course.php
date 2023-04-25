<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{                   
    use HasFactory;
    protected $fillable = ['course_id','subject_id','name_subject','class','teacher_id','name '];
    
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }         
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }

}
