@extends('layouts.mainlayout')

@section('tittle', 'Student Delete')

@section('content')
    <div class="mt-5">
        <h2>Are you sure to delete data : {{$student->name}} {{$student->nis}}</h2>

        <form style="display: inline-block" action="/student-destroy/{{$student->id}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>

        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
@endsection