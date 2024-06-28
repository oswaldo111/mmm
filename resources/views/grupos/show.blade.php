@extends('layouts.app')

@section('content')

    <h1>ver grupo</h1>

    <div class="row">
        <div class="col-md-4">
            <label for="nombre">nombre</label>
            <input type="text" class="form-control" id="nombre"
            value="{{$grupo->nombre}}" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="descripcion" class="form-label">descripcion</label>
            <textarea class="form-control" name="descripcion" id="descripcion"  disabled>
                {{$grupo->descripcion}}
            </textarea>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="mol-md-12">
            <a href="{{route('grupos.index')}}" class="btn btn-primary">retornar</a>
        </div>
    </div>
    
@endsection