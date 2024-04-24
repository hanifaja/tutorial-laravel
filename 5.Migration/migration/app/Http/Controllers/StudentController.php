<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $class = ClassRoom::with('students')->get(); // cara request data
        // select * from table class
        // selecr * from student where class in (hanifku, dll)
        return view('classroom', ['classList' => $class]);
    }
}
