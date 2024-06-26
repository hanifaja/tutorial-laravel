@extends('layouts.mainlayout')

@section('tittle', 'Class')

@section('content')
        <h1>ini halaman Class</h1>
        <h3>Class List</h3>

        <div class="my-5">
            <a href="class-add" class="btn btn-primary">Add Class</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classList as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td><a href="class-detail/{{$data->id}}">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
@endsection