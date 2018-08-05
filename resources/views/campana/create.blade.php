@extends('layouts.app')
@section('content')
<div class="container">
        {!! Form::open(['route' => ['campains.store'], 'files' => true , 'enctype' => 'multipart/form-data']) !!}
            @include('campana.partials.form')
        {!! Form::close() !!}
@endsection
