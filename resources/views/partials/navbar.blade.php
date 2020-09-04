<nav class="navbar navbar-light shadow-sm navbar-expand-lg mb-2">
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav">
            <li class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">Inicio</a>
            </li>

            <li class="nav-link {{ request()->is('saludos*') ? 'active' : '' }}">
                <a href="{{ route('saludos') }}">Saludos</a>
            </li>

            <li class="nav-link {{ request()->is('mensajes/create') ? 'active' : '' }}">
                <a href="{{ route('mensajes.create') }}">Contacto</a>
            </li>

            @if (auth()->check())
                <li class="nav-link {{ ( request()->is('mensajes') || request()->is('mensajes/*/edit') ) ? 'active' : '' }}">
                    <a href="{{ route('mensajes.index') }}">Mensajes</a>
                </li>

                @if (auth()->user()->hasRoles(['admin']))
                    <li class="nav-link {{ ( request()->is('usuarios*') || request()->is('mensajes/*/edit') ) ? 'active' : '' }}">
                        <a href="{{ route('usuarios.index') }}">Usuarios</a>
                    </li>
                @endif

            @endif

        </ul>

        <ul class="nav navbar-nav right-align">

            @if(auth()->guest())

                <li class="nav-link {{ ( request()->is('login') ) ? 'active' : '' }}">
                    <a href="{{ route('login') }}">Login</a>
                </li>

            @else

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/login" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item"
                          href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                        </a>

                        <a class="dropdown-item" href="/usuarios/{{ auth()->id() }}/edit">Mi cuenta</a>

                    </div>

                </li>

            @endif

        </ul>




    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
