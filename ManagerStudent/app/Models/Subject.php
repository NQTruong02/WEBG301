<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['subject_id','name subject','slot'];
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
            
