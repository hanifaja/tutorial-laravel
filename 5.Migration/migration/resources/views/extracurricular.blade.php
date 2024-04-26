@extends('layouts.mainlayout')

@section('tittle', 'Extracurricular')

@section('content')
        <h1>ini halaman Extracurricular</h1>
        <h3>Student List</h3>

        <div class="my-5">
            <a href="" class="btn btn-primary">Add Extracurricular</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($extraList as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td><a href="extra-detail/{{$data->id}}">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
@endsection