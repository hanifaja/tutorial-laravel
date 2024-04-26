<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teacher = Teacher::all();
       return view('Teacher', ['teacherList' => $teacher]);
    }

    public function show($id){
        $teacher = Teacher::findOrFail($id);
        return view('teacher-detail',['teacher' => $teacher]);
    }
}
