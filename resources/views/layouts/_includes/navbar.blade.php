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
    </ul>
</header>
@endsection