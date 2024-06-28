@extends('layouts.app')

@section('content')

    <h1>eliminar grupo</h1>

    <form action="{{route('grupos.destroy', $grupo->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="nombre"
                name="nombre" value="{{$grupo->nombre}}" disabled>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="descripcion" class="form-label">descripcion</label>
                <textarea type="text" class="form-control" id="descripcion"
                name="descripcion"  disabled>{{$grupo->descripcion}}</textarea>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
               <button type="submit" class="btn btn-primary">aliminar</button>
               <a href="{{route('grupos.index')}}" class="btn btn-primary">Cancelar</a>
            </div>
        </div>
    </form>
    @endsection