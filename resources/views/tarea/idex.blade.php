@extends('tema.app')

@section('title', 'Listar tareas')

@section('contenido')
    <h3>Listado tareas</h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Finalizada</th>
                    <th scope="col">Fecha limite</th>
                    <th scope="col">Urgencia</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $tarea)
                    <tr class="">
                        <td>{{$tarea->nombre}}</td>
                        <td>{{$tarea->estaFinalzida()}}</td>
                        <td>{{$tarea->fecha_limite->format('H:i d / m / y')}}</td>
                        <td>{{$tarea->urgencia()}}</td>
                        <td>{{$tarea->descripcion}}</td>
                        <td>
                            <a href="{{route('tarea.edit',$tarea)}}">Editar</a>
                            <a href="{{route('tarea.show',$tarea)}}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
