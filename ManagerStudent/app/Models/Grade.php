<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id','score','evaluate'];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
