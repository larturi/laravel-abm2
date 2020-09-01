@extends('layout')

@section('contenido')

<div class="row p-4">
    <div class="col">
        <h1 class="display-4 text-primary">Mensajes</h1>

        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>
                            <a href="{{ route('mensajes.show', $message->id) }}">
                                {{ $message->nombre }}
                            </a>
                        </td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->mensaje }}</td>
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
    </div>
</div>



@endsection
