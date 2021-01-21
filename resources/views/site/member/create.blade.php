@extends('layouts.app')
@include('layouts._includes.navbar')


@section('content')
    <div class="container">
        <h1>New</h1>
        <br>
        <form action="{{ route('site.member.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <label for="fname">Nome</label>
                    <input id="fname" name="fname" type="text" class="form-control" placeholder="Ex.: Rafael">
                </div>
                <div class="col-2">
                    <label for="birthday">Dt. Nascimento</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="dd/MM/AAAA">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="lname">Sobrenome</label>
                    <input id="lname" name="lname" type="text" class="form-control" placeholder="Ex.: Silva Torres">
                </div>
            </div>
            <div class="row">
                
            </div>
            <br>
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>
        
    </div>
@endsection