@extends('layouts.app')

@section('content')

    <h1>ver docene</h1>

   
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label"> nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$docente->nombre}}" disabled>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="{{$docente->apellido}}" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">email</label>
                <input type="text" name="email" id="email" class="form-control" value="{{$docente->email}}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
               <button class="btn btn-primary" type="submit">eliminar</button>
               <a href="{{route('docentes.index')}}" class="btn btn-secondary">retornar</a>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">crear</button>
                <a href="{{route('docentes.index')}}" class="bt btn-primary">cancelar</a>
            </div>
        </div>
   
    
@endsection