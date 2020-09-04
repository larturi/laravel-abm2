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

                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="name" value="{{ $user->name }}">
                    {!! $errors->first('name', '<span class="error">:message</span>') !!}
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm border-0" type="text" name="email" value="{{ $user->email }}">
                    {!! $errors->first('email', '<span class="error">:message</span>') !!}
                </div>

                    <p>Roles</p>
                    @foreach ($roles as $id => $name)
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                        <input type="checkbox" value="{{ $id }}" class="form-check-input" name="roles[]">
                            {{ $name }}
                        </label>
                    </div>

                    @endforeach


                <input class="btn btn-primary btn-block" type="submit" value="Enviar">

            </form>


        </div>

    </div>

</div>









@endsection
