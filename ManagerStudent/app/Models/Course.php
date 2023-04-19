<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['subject_id','class','teacher'];
    
    public function state()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }

}
