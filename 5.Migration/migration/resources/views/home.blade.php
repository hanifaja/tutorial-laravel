@extends('layouts.mainlayout')

@section('tittle', 'Home')

@section('content')
        <h1>ini halaman home</h1>
        <h2>Selamat datang {{$name}} saya adalah {{$role}}</h2>
        
        {{-- if derective --}}
        {{-- @if ($role == 'admin')
            <a href="">Ke halaman admin</a>
            @elseif($role == 'staf')
            <a href="">Ke halaman staf</a>
            @else
            <a href="">Ke halaman whatever</a>
        @endif --}}


        {{-- switch --}}
        {{-- @switch($role)
            @case($role=='admin')
                <a href="">Ke halaman admin</a>
                @break
            @case($role=='staf')
                <a href="">Ke halaman gudang</a>
                @break
            @default
            <a href="">Ke halaman Whether</a>
                
        @endswitch --}}

        {{-- loops --}}
        {{-- @for ($i = 0; $i < 5; $i++)
            {{$i}} <br>
        @endfor --}}

        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
            </tr>
            @foreach ($buah as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item}}</td>
            </tr>
            @endforeach
        </table>
@endsection