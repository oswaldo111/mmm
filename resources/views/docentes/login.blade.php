@extends('layouts.app')

@section('content')

    <h1>login docente</h1>

    <form action="{{ route('docentes.login')}}" method="POST">
        @csrf

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

        <div style="margin-top: 10px " class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">login</button>
            </div>
        </div>

        <div style="margin-top: 10px" class="row">
            @error('InvalidCredentials')
            <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
                {{$message}}
            </div>
                
            @enderror
        </div>
    </form>
    
@endsection