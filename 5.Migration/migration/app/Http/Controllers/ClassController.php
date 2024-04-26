<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index (){
        $class = ClassRoom::all(); // select * from students
        return view('classroom', ['classList' => $class]);
    }

    public function show($id){
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }

    public function create(){
        $class = ClassRoom::select('id', 'name')->get();
        return view('class-add', ['class' => $class]);
    }

    public function store(Request $request){
        $class = ClassRoom::create($request->all());
        return redirect('/classroom');
    }
}
