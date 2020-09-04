@extends('layout')

@section('contenido')

<div class="mt-4">

    <div class="row no-gutters">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <h1 class="mb-4">Editar usuario</h1>

                @if (session()->has('info'))
                <div class="alert alert-primary" role="alert">
                    <strong>{{ session('info') }}</strong>
                </div>

            @endif

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('usuarios.update', $user->id) }}">

                @method('PUT')

                @include('users.form')

                <input class="btn btn-primary btn-block" type="submit" value="Enviar">

            </form>

        </div>

    </div>

</div>

@endsection
