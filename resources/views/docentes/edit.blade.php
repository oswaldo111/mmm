@extends('layouts.app')
@section('content')
    <h1>editar docente</h1>

    <form action="{{route('docentes.update', $docente->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label"> nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$docente->nombre}}" required>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$docente->apellido}}" required >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{$docente->email}}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
               <button class="btn btn-primary" type="submit">modificar</button>
               <a href="{{route('docentes.index')}}" class="btn btn-secondary">cancelar</a>
            </div>
        </div>
        
    </form>
    
@endsection