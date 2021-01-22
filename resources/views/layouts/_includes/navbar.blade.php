@section('navbar')
<nav>
    <input type="checkbox" id="res-menu">
    <label for="res-menu">
        <i class="fa fa-bars" id="sign-one"></i>
        <i class="fa fa-times" id="sign-two"></i>
    </label>
    <span><a href="{{ route('site.home.index') }}">ADCaetés</a></span>
    <ul>
        <a href="#"><li>Painel</li></a>
        <a href="#"><li>Sobre</li></a>
        <a href="#"><li>Congregações</li></a>
        <a href="{{ route('site.member.index') }}"><li>Membros</li></a>
    </ul>
</nav>
@endsection