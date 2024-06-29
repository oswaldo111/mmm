@extends('layouts.app')

@section('content')

    @if (session('success'))

        <div class="alert alert-success fade show" id="success-messege" data-bs-dismiss="alert" role="alert">
            {{session('success')}}
        </div>
    @endif

    <h1>lista de los docentes</h1>

    <form action="{{route('docentes.index')}}" method="GET">
        @csrf

        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="apellido" placeholder="apellido">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">buscar</button>
                <a href="{{route('docentes.create')}}" class="btn btn-secondary">ir a crear</a>
            </div>
        </div>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>nombre</th>
                <th>apellido</th>
                <th>email</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{$docente->nombre}}</td>
                    <td>{{$docente->apellido}}</td>
                    <td>{{$docente->email}}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{route('docentes.edit', $docente->id)}}" class="btn btn-warning">editar</a>
                            </td>
                            <td>
                                <a href="{{route('docentes.show', $docente->id)}}" class="btn btn-info">ver</a>
                            </td>
                            <td>
                                <a href="{{route('docentes.delete', $docente->id)}}" class="btn btn-danger">eliminar</a>

                            </td>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-12">
            {{$docente->links}}
        </div>
    </div>

@endsection