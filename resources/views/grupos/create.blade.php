@extends('layouts.app')

@section('content')

    <h1>crear nuevo grupo</h1>
    <form action="{{ route('grupos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                  <label for="nombre" class="form-label">nombre</label>
                 <input type="text" class="form-control" name="nombre" id="nombre" required >
             </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                  <label for="descripcion" class="form-label">descripcion</label>
                 <textarea class="form-control" id="descripcion" name="descripcion" ></textarea>
             </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">crear</button>
                  <a href="{{route('grupos.index')}}" class="btn btn-primary"> cancelar</a>
                </div>
        </div>
    </form>
    @endsection