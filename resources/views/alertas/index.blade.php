@extends('layouts.app')

@section('content')


    @foreach ($alertas as $alert)
        {{ $alert }}
       {{--  latitud: {{ $alert->latitud }} <br>
       longitud: {{ $alert->longitud }} <br>  --}}
    @endforeach

@endsection
