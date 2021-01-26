@extends('layouts.app')
@include('layouts._includes.navbar')
@section('content')
    <div id="panel" class="container">
        <ul class="sidebar">
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Usuários</span>
                </a>
            </li>
            <li>
                <a href="{{ route('site.member.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Membros</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class="fa fa-university"></i>
                    <span>Igreja</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class="fa fa-gear"></i>
                    <span>Configurações</span>
                </a>
            </li>
        </ul>
        <div class="main">
            <h1 align="center">Painel Administrador</h1>

                
            @if ($panel)
                panel
            @else
                naopainel

            @endif
        </div>
    </div>
@endsection

@include('layouts._includes.footer')







