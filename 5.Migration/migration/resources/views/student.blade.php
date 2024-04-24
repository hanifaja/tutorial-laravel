@extends('layouts.mainlayout')

@section('tittle', 'Student')

@section('content')
        <h1>ini halaman Student</h1>
        <h3>Student List</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->class['name']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    
@endsection