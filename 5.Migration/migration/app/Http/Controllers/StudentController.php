<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index (){
        // $student = Student::all(); // select * from students
        // return view('student', ['studentList' => $student]);

        // Query Builder
        // $student = DB::table('students')->get();
        // DB::table('students')->insert([
        //     'name' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '9339499',
        //     'class_id' => 1
        // ]);

        // DB::table('students')->where('id', 20)->update([
        //     'name' => 'query builder 2',
        //     'class_id' => 1
        // ]);

        // DB::table('students')->where('id', 32)->delete();

        // eloquent
        // $student = Student::all();
        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '9339490',
        //     'class_id' => 1
        // ]);

        // Student::find(32)->update([
        //     'name' => 'eloquent2',
        //     'class_id' => 1
        // ]);

        // Student::find(33)->delete();
        // dd($student);




        // Collection
        // $student = Student::all(); // select * from students
        // return view('student', ['studentList' => $student]);
        $nilai = [9,8,7,6,5,4,3,2,1,3,5,6,7,8];

        // Menghitung rata rata

        // Php biasa
        // 1. Hitung Jumlah Nilai
        // 2. Hitung berapa banyak nilai
        // 3. Hitung nilai rata rata
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata= $totalNilai / $countNilai;

        

        // Collection
        // 1. Hitung rata rata nilai
        // $nilaiRataRata = collect($nilai)->avg();

        // Method Collecttion yang sering di pake
        // Contains = cek apakah sebuah array memiliki sesuatu
        // $nilaiw = collect($nilai)->contains(function ($value) {
        //     return $value < 6;
        // });

        // $restoA = ["Pizza", "Siomay", "Pempek", "Batagor"];
        // $restoB = ["Pizza", "Siomay", "Pecel Lele", "Bakso"];

        // Method Diff
        // $menuRestoA = collect($restoA)->diff($restoB); 
        // $menuRestoB = collect($restoB)->diff($restoA); 

        // Method Filter = untuk menyaring
        // $aaa = collect($nilai)->filter(function ($value) {
        //     return $value > 5;
        // })->all();

        // $biodata = [
        //     ['nama' => 'jono','umur' => 17],
        //     ['nama' => 'pam','umur' => 18],
        //     ['nama' => 'donz','umur' => 19],
        //     ['nama' => 'yono','umur' => 40],
        // ];
        // Method Pluck
        // $aaa = collect($biodata)->pluck('nama','umur')->all();

        // Method Map
        // mencari tahu hasi dari nilai jika di kali 2 dari data yang ada di array $nilai
        // $aaa = collect($nilai)->map(function ($item){
        //     return $item * 2;
        // });

        // $multiplied->all();

        // dd($aaa);

        // Lazy Loading
        // $student = Student::all(); // cara request data => ketika dibutuhkan ambil data
        // return view('student', ['studentList' => $student]);
        // select * from table class
        // select * from student where class = Hanifku

        // eager loading
        $student = Student::get(); // cara request data
        // select * from table class
        // selecr * from student where class in (hanifku, dll)
        return view('student', ['studentList' => $student]);
    }

    public function show($id){
        $student = Student::with(['class.homeroomTeacher'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create(){
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(Request $request){

        $validate = $request->validate([
            'nis' => 'unique:students|max:10',
            'name' => 'max:10'
        ]);
       
        // $student = new student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        // Mass asigment
        $student = Student::create($request->all());

        if($student){
            Session::flash('status', 'succsess');
            Session::flash('message', 'add new student succsess');
        }

        return redirect('/students');
    }

    public function edit(Request $request, $id){
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id','name']);
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }
    
    public function destroy($id){
    //    $deleteStudent = DB::table('students')->where('id', $id)->delete();

    // Eloquent
        $deleteStudent = Student::findOrFail($id);
        $deleteStudent->delete();

        if($deleteStudent){
            Session::flash('status', 'succsess');
            Session::flash('message', 'delete student succsess');
        }
       
       return redirect('/students');
    }
}
