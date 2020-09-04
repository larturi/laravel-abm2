@extends('layout')

@section('contenido')

<div class="row p-4">

    <div class="col-12 col-sm-10 col-lg-6 mx-auto">

        <h1 class="mb-4">Crear usuario</h1>

        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('usuarios.store') }}">

            @include('users.form', ['user' => new app\User])

            <input class="btn btn-primary btn-block" type="submit" value="Guardar">

        </form>

    </div>
</div>

@endsection
