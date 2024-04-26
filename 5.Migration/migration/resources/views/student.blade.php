@extends('layouts.mainlayout')

@section('tittle', 'Student')

@section('content')
        <h1>ini halaman Student</h1>
        <h3>Student List</h3>

        <div class="my-5">
            <a href="students-add" class="btn btn-primary">Add Data</a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-primary" role="alert">
                A Simple Primary Alert-Check It Out!
                {{Session::get('message')}}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->gender}}</td>
                    <td><a href="students/{{$data->id}}">Detail</a></td>
                    <td><a href="student-edit/{{$data->id}}">Edit</a></td>
                    <td><a href="student-delete/{{$data->id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

       
    
@endsection