@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="map" style="visibility: visible;"></div>

    {!! Form::open(['route' => ['alertas.store']]) !!}
        {{ Form::text('latitud', null, ['id' => 'val1']) }}
        {{ Form::text('longitud', null, ['id' => 'val2']) }}

    {{ Form::submit('Eviar Alertar', ['class' => 'btn btn-sm btn-primary']) }}
    {!! Form::close() !!}
                    You are logged in!
                    <a class="btn btn-success" href="{{ route('alertas.index') }}">Ver alertas</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
