@extends('layouts.app')

@section('content')

    <h1>crear un nuevo docente</h1>

    <form action="{{route('docentes.store')}}" method="POST">

        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label"> nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="password" class="form-label">password</label>
                <input type="text" name="password" id="password" class="form-control" required>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">crear</button>
                <a href="{{route('docentes.index')}}" class="bt btn-primary">cancelar</a>
            </div>
        </div>
    </form>
    
@endsection