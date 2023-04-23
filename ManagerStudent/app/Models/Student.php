<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_id',
        'name subject',
        'courses_id',
        'course_id',
        'class',
        'grade_id',
        'score',
        'name',
        'age',
        'gender',
        'address',
        'gmail',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
