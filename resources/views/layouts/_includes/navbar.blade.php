@section('header')
<header>
    <input type="checkbox" id="res-menu">
    <label for="res-menu">
        <i class="fa fa-bars" id="sign-one"></i>
        <i class="fa fa-times" id="sign-two"></i>
    </label>
    <span><a href="{{ route('site.home.index') }}">ChurchPlus</a></span>
    <ul>

        <a href="{{ route('site.panel.index') }}"><li>Painel</li></a>
        <a href="#"><li>Sobre</li></a>
        <a href="#"><li>Congregações</li></a>
        <a href="{{ route('site.panel.member.index') }}"><li>Membros</li></a>
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</header>
@endsection