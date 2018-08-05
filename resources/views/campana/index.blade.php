@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Lista de Servicios</h1>
    <a href="{{ route('campains.create') }}" class="btn btn-primary float-right my-3">Crear</a>
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Recolecta</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($campains as $camp)
                <tr>
                    <th>{{ $camp->id }}</th>
                    <th>{{ $camp->nombre }}</th>
                    {{--  <th>
                        @if (count($serv->modulos) > 0)
                        <ul>
                            @foreach ($serv->modulos as $modulos)
                                <li>{{$modulos->name}}</li>
                            @endforeach
                        </ul>
                        @else
                        No posee modulos
                        @endif
                    </th>  --}}
                    <th>0</th>
                    <th>
                        @if ($camp->status == 1)
                            Activa
                        @else
                            Inactiva
                        @endif
                    </th>
                    <th>
                        {!! Form::open(['route' => ['campains.destroy', $camp->id],
                        'method' => 'DELETE']) !!}
                        <button class="btn btn-sm btn-danger"> Eliminar </button>
                        {!! Form::close() !!}
                    </th>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $campains->render() }}
</div>
@endsection
