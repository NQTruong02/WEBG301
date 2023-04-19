<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
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
