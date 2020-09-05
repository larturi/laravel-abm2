@extends('layout')

@section('contenido')

<div class="mt-4">

    <div class="row no-gutters">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <h1 class="mb-4">Editar mensaje</h1>

            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('mensajes.update', $message->id) }}">
                @method('PUT')
                @include('messages.form', [
                    'btnText' => 'Actualizar',
                    'showFields' => !$message->user_id,
                ])
            </form>


        </div>

    </div>

</div>

@endsection
