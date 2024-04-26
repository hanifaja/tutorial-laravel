@extends('layouts.mainlayout')

@section('tittle', 'Class Detail')

@section('content')
    <h2>ANda sedang melihat data detail dari class yang bernama {{$class->name}}</h2>

    <div class="mt-5">
        <h3><strong>Homeroom Teacher : </strong>{{$class->homeroomTeacher->name}}</h3>
    </div>

    <div class="mt-5">
        <h3>List Student</h3>
        <ol>
            @foreach ($class->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>
@endsection