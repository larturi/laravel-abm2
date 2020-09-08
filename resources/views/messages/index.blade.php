@extends('layout')

@section('contenido')

    <h1 class="display-4 text-primary">Mensajes</h1>

    <table class="table table-responsive-sm table-condensed">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Notas</th>
                <th>Etiquetas</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>

                    @if ($message->user_id)
                        <td>
                        <a href="{{ route('usuarios.show', $message->user_id) }}">
                            {{ $message->user->name }}
                        </a>
                        </td>
                        <td>{{ $message->user->email }}</td>
                    @else
                        <td>{{ $message->nombre }}</td>
                        <td>{{ $message->email }}</td>
                    @endif

                    <td>
                        <a href="{{ route('mensajes.show', $message->id) }}">
                            {{ $message->mensaje }}
                        </a>
                    </td>

                    <td>
                            {{ $message->note ? $message->note->body : '' }}
                    </td>

                    <td>
                        <span class="badge badge-pill badge-primary">
                            {{ $message->tags->pluck('name')->implode('') }}
                        </span>
                    </td>

                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('mensajes.edit', $message->id) }}">Editar</a>

                        <form style="display: inline" method="POST" action="{{route('mensajes.destroy', $message->id)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    {{-- Pagination --}}
    <div class="col-12 col-sm-10 col-lg-5 mx-auto d-flex justify-content-center mb-4 text-center">
        {!! $messages->appends(request()->query())->links() !!}
    </div>

@endsection
