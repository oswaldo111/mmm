@extends('layouts.app')

@section('content')

    <h1>editar grupo</h1>

    <form action="{{route('grupos.update', $grupo-> id)}}" method="POST">
        
        @csrf

        <div class="row">
            <div class="col-med-4">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="nombre"
                name="nombre" value="{{$grupo-> nombre}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-med-6">
                <label for="nombre" class="form-label">nombre</label>
                <textarea  class="form-control" id="descripcion"
                name="descripcion" >{{$grupo-> descripcion}}
                </textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-med-12">
                <button type="submit" class="btn btn-primary">modificar</button>
                <a href="{{route('grupos.index')}}" class="btn btn-secundary">cancelar</a>
            </div>
        </div>
    </form>   
@endsection