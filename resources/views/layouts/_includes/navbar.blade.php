@section('navbar')
<nav>
    <input type="checkbox" id="res-menu">
    <label for="res-menu">
        <i class="fa fa-bars" id="sign-one"></i>
        <i class="fa fa-times" id="sign-two"></i>
    </label>
    <span><a href="{{ route('site.home.index') }}">ADCaetés</a></span>
    <ul>
        <li><a href="{{ route('site.home.index') }}">Home</a></li>
        <li><a href="{{ route('site.member.index') }}">Membros</a></li>
        <li><a href="#">Filiais</a></li>
        <li><a href="#">Sobre</a></li>
    </ul>
</nav>
@endsection