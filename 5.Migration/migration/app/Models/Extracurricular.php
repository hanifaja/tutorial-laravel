<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Extracurricular extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsToMany(Student::class, 'students_extracurricular', 'extracurricular_id', 'student_id');
    }
}
