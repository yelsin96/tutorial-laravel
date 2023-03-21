@extends('tema.app')

@section('title', 'ver')

@section('contenido')
    <h3>tarea <i>{{$tarea->nombre}}</i> </h3>
    <ul>
        <li>
            finalizada: <strong>{{ $tarea->estaFinalzida()}}</strong>
        </li>
        <li>
            urgencia: <strong>{{ $tarea->urgencia()}}</strong>
        </li>
        <li>
            fecha limite: <strong>{{ $tarea->fecha_limite}}</strong>
        </li>
        <li>
            descripcion: <strong>{{ $tarea->descripcion}}</strong>
        </li>
    </ul>
    <hr>
    <div class="row">
        <div class="col sm-6">
            <form action="{{route('tarea.destroy', $tarea)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
    </div>

@endsection