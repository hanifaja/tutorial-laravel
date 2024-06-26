<?php

namespace App\Models;


use App\Models\Extracurricular;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [ 
        'name', 
        'gender', 
        'nis', 
        'class_id'
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurricular()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }

}
