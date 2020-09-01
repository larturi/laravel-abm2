@extends('layout')

@section('contenido')

    <div class="mt-4">

        <div class="row no-gutters">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <h1 class="mb-4">Contacto</h1>

                @if (session()->has('info'))
                    <h3>{{ session('info') }}</h3>
                @else
                    <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('mensajes.store') }}">

                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input class="form-control bg-light shadow-sm border-0" type="text" name="nombre" value="{{ old('nombre') }}">
                            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control bg-light shadow-sm border-0" type="text" name="email" value="{{ old('email') }}">
                            {!! $errors->first('email', '<span class="error">:message</span>') !!}
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control bg-light shadow-sm border-0" name="mensaje">{{ old('mensaje') }}</textarea>
                            {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}
                        </div>

                        <input class="btn btn-primary btn-block" type="submit" value="Enviar">

                    </form>
                @endif

            </div>

        </div>

    </div>

@endsection
