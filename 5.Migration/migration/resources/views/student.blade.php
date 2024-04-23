@extends('layouts.mainlayout')

@section('tittle', 'Student')

@section('content')
        <h1>ini halaman Student</h1>
        <h3>Student List</h3>
        <ol>
            @foreach($studentList as $data)
            <li>{{$data->name}} | {{$data->gender}}</li>
            @endforeach
        </ol>
    
@endsection