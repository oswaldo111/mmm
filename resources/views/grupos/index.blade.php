@extends('layouts.app')

@section('content')

@if (@session('success'))

<div class="alert alert-success fade show" id="succes-messege"
data-bs-dismiss="alert" role="alert">
{{session('success')}}
</div>
 
@endif

    <h1>lista de grupos</h1>

    <form action="{{route('grupos.index')}}" method="GET">
        @csrf

        <div class="row">
            <div class="col-sm-4"> 
                <input type="text" class="form-control" name="nombre" placeholder="nombre">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">buscar</button>
                <a href="{{ route('grupos.create') }}" class="btn btn-secondary">ir a crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>nombre</th>
                <th>descripcio</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td>{{$grupo->nombre}}</td>
                    <td>{{$grupo->descripcion}}</td>
                    <td>
                        <table>
                            <td>
                                <a href="{{route('grupos.edit', $grupo->id)}}" class="btn  btn-warning">editar</a>
                            </td>
                            <td>
                                <a href="{{route('grupos.show', $grupo->id)}}" class="btn  btn-info">ver</a>

                            </td>
                            <td>
                                <a href="{{route('grupos.delete', $grupo->id)}}" class="btn  btn-danger">eliminar</a>

                            </td>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-sm-12">
            {{$grupos-> links()}}
        </div>
    </div>
@endsection