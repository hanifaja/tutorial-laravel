<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;


class ExtracurricularController extends Controller
{
    public function index(){
    $extra = Extracurricular::all();
       return view('extracurricular', ['extraList' => $extra]);
    }

    public function show($id){
        $ekskul = Extracurricular::findOrFail($id);
        return view('extra-detail', ['ekskul' => $ekskul]);
    }
}
