@extends('layout')

@section('contenido')

<div class="row p-4">
    <div class="col">
        <h1 class="display-4 text-primary">Usuarios</h1>

        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($users as $user)

                    <tr>
                       <td>{{ $user->id }}</td>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>
                              {{ $user->roles->pluck('display_name')->implode(', ') }}
                        </td>

                       <td>
                            <a class="btn btn-info btn-sm"
                               href="{{ route('usuarios.edit', $user->id) }}">Editar</a>

                            <form style="display: inline"
                                  method="POST"
                                  action="{{route('usuarios.destroy', $user->id)}}">
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
