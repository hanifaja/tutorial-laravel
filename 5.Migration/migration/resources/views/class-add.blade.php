@extends('layouts.mainlayout')

@section('tittle', 'Class Detail')

@section('content')
    <div class="mt-5 col-8 m-auto">
        <form action="">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection