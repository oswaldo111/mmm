@extends('layouts.app')
@section('content')
<h1>editar docente grupo</h1>
    <form action="{{route('docentes_grupos.update', $docenteGrupo->id)}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="docente_id">docente</label>
                <select name="docente_id" class="form-control" required>
                    <option value="">seleccione un docente</option>
                    @foreach ($docentes as $docente)
                        <option value="{{$docente->id}}" @if ($docente->id == $docenteGrupo->docente_id)
                            selected
                        @endif>{{$docente->nombre}} {{$docente->apellido}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label for="grupo_id">grupo</label>
                <select name="grupo_id" class="form-control" required>
                    <option value="">seleccione un grupo</option>
                    @foreach ($grupos as $grupo)
                        <option value="{{$grupo->id}}" @if ($grupo->id == $docenteGrupo->grupo_id)
                            selected   
                        @endif>{{$grupo->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
               <button type="submit" class="btn btn-primary">modificar</button>
               <a href="{{route('docentes_grupos.index')}}" class="btn btn-secondary">cancelar</a>
            </div>
        </div>
    </form>
@endsection