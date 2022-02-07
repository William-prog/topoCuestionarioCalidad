<ul>
    @guest
    <li>
        <a href="{{ route('login') }}">{{ __('Iniciar sesión    ') }}<i class="fas fa-sign-in-alt"></i></a>
    </li>
    <li>
        <a href="{{ route('register') }}">{{ __('Crear cuenta   ') }}<i class="fas fa-user-plus"></i></a>
    </li>
    @else

    <li style="font-size: 12px;" class="dropdown">
        <a href="#" class="sub-menu-toggle">
            {{ __('Formulario ') }} <span class="caret"><i class="fas fa-indent"></i></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="/registroFormulario/create" style="cursor: pointer">{{ __('Nuevo Formulario ') }}<i class="fas fa-paste"></i></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="title">
                {{ __('Bienvenido ') }} {{ Auth::user()->name }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </span>
            <span class="icon"><i class="fas fa-walking"></i></span>
        </a>
    </li>
    @endguest
</ul>