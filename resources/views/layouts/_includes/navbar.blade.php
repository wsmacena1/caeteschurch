@section('header')

<header>
    <input type="checkbox" id="res-menu">
    <label for="res-menu">
        <i class="fa fa-bars" id="sign-one"></i>
        <i class="fa fa-times" id="sign-two"></i>
    </label>
    <span><a href="{{ route('site.home.index') }}">Church</a></span>
    <ul>
        
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
                <div class="dropdown show">
                    <a id="dropdownMenuLink" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                        Painel
                    </a>
                

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('site.panel.index') }}">Painel</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Desconectar') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        @endguest
        <a href="#"><li>Sobre</li></a>
    </ul>
</header>
@endsection