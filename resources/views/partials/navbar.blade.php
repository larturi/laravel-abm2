<nav class="navbar navbar-light shadow-sm navbar-expand-lg mb-2">
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">Inicio</a>
            </li>

            <li class="nav-link {{ request()->is('saludos*') ? 'active' : '' }}">
                <a href="{{ route('saludos') }}">Saludos</a>
            </li>

            <li class="nav-link {{ request()->is('mensajes/create') ? 'active' : '' }}">
                <a href="{{ route('mensajes.create') }}">Contacto</a>
            </li>

            <li class="nav-link {{ ( request()->is('mensajes') || request()->is('mensajes/*/edit') ) ? 'active' : '' }}">
                <a href="{{ route('mensajes.index') }}">Mensajes</a>
            </li>

            @if(auth()->guest())
                <li class="nav-link {{ request()->is('mensajes/login') ? 'active' : '' }}">
                    <a href="/login">Login</a>
                </li>
                @else
                    <li>
                        <a class="nav-link"
                        href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                        </a>
                    </li>
            @endif
        </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
