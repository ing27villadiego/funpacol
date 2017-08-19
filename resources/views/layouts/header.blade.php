<header>
    <div class="logo left">
        <img src="{{asset('imagenes/logo.jpg')}}" alt="funpacol"/>
    </div>

    <div class="titular">
        <h1 class="titulo">
            Fundacion Padrinos de Colombia
        </h1>
        <div>
            <a href="#" class="filtro">
                Funpacol
            </a>
        </div>
    </div>
    <div class="usuario">
        @if (Auth::guest())
            <ul class="login"><a href="{{ route('sign_in') }}">Login</a></ul>
        @else

            <ul class="dropdown userName">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            Cerrar sesion
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </ul>

        @endif
    </div>

</header>

