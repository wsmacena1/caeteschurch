@extends('layouts.app')
@include('layouts._includes.navbar')
@section('content')
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <h1 align="center">Painel Administrador</h1>
            
        </div>
    </div>
@endsection
@include('layouts._includes.footer')