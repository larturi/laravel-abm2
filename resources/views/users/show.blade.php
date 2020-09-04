@extends('layout')

@section('contenido')

<div class="row p-4">
    <div class="col">

       <h1 class="display-4 text-primary">Usuario: {{ $user->name }}</h1>

        <table class="table table-responsive-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->display_name }}
                        @endforeach
                    </td>



                        <td>
                            @can('edit', $user)
                               <a class="btn btn-info btn-sm" href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
                            @endcan

                            @can('destroy', $user)
                                <form style="display: inline"
                                        method="POST"
                                        action="{{route('usuarios.destroy', $user->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            @endcan
                        </td>



                </tr>

            </tbody>
        </table>

    </div>
</div>



@endsection
