@extends('layouts.mainlayout')

@section('tittle', 'Student Detail')

@section('content')

    <h2>Anda Sedang Melihat data detail dari siswa {{$student['name']}}</h2>
    <h2>{{$student}}</h2>

    <div class="mt-5 mb-5">
        <table class="table table-bordered">
            <tr>
                <th>Nis</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Homeroom Teacher</th>
            </tr>
            <tr>
                <td>{{$student->nis}}</td>
                <td>@if ($student->gender == 'P')
                    Perempuan
                    @else
                    Laki Laki
                @endif
                </td>
                <td>{{$student->class->name}}</td>
                <td>{{$student->class->homeroomTeacher['name']}}</td>
            </tr>
        </table>
    </div>



@endsection