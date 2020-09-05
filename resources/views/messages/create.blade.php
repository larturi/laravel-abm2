@extends('layout')

@section('contenido')

@if (session()->has('info'))
    <div class="row">
        <div class="col-12 text-center">
            <h3>{{ session('info') }}</h3>
        </div>
    </div>
@endif

<div class="mt-4">

    <div class="row no-gutters">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            @if (!session()->has('info'))

                <h1 class="mb-4">Contacto</h1>

                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('mensajes.store') }}">
                    @include('messages.form', [
                        'message' => new App\Message,
                        'showFields' => auth()->guest(),
                    ])
                </form>

            @endif

        </div>

    </div>

</div>

@endsection
