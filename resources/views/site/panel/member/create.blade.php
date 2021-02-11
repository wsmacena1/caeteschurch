@extends('layouts.app')
@include('layouts._includes.navbar')

@section('content')
<style>
    .top{
        padding-top: 40px;
        background: #151515;
    }
</style>
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <section class="content-header">
                <h2>Igreja</h2>
            </section>
            <div class="tabela">
                <div class="card">
                    <div class="card-body">
                        <h1>Inclusão</h1>
                        <hr class="linha">
                        <form action="" method="POST">
                            <div class="form-group row ">
                                <div class="col-sm-2" >
                                    <label class="col-form-label" for="cpf">Cpf</label>
                                    <input type="text" class="form-control" id="cpf"  placeholder="___.___.___-__">    
                                </div>
                                <div class="col-sm-2">
                                    <label class="col-form-label" for="rg">RG</label>
                                    <input type="text" class="form-control" id="rg"  placeholder="__.___.___-_">    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label" for="name">Nome</label>
                                    <input type="text" class="form-control" id="name"  placeholder="Nome Completo">    
                                </div>
                                <div class="col-sm-2">
                                    <label class="col-form-label" for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email"  placeholder="E-mail">    
                                </div>
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="phone">Telefone</label>
                                    <input type="text" class="form-control" id="phone"  placeholder="Telefone">    
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="birthday">Data de Nascimento</label>
                                    <input type="date" class="form-control" id="birthday">
                                </div>
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="baptism">Data de Batismo</label>
                                    <input type="date" class="form-control" id="baptism">
                                </div>
                                
                            </div>
                            {{-- Endereço --}}
                            <div class="form-group row ">
                                <div class="col-sm-4">
                                    <label class="col-form-label" for="address">Endereço</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="col-sm-1">
                                    <label class="col-form-label" for="number">Número</label>
                                    <input type="text" class="form-control" id="number" name="number">
                                </div>
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="complement">Complemento</label>
                                    <input type="text" class="form-control" id="complement" name="complement">
                                </div>
                                <div class="col-sm-3">
                                    <label class="col-form-label" for="neighborhood_id">Bairro</label>
                                    <select class="form-control"  id="neighborhood_id" name="neighborhood_id" required>
                                        <option value="0" selected></option>
                                        @foreach ($neighborhood as $n)
                                            <option value="{{ $n->id }}">{{ $n->name }}</option>
                                        @endforeach
                                    </select>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="formulario">
                <h2>Novo Membro</h2>
                <form action="{{ route('site.panel.member.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <label for="fname">Nome</label>
                            <input id="fname" name="fname" type="text" class="form-control" placeholder="Ex.: Rafael">
                        </div>
                        <div class="col-4">
                            <label for="lname">Sobrenome</label>
                            <input id="lname" name="lname" type="text" class="form-control" placeholder="Ex.: Silva Torres">
                        </div>
                        <div class="col-4">
                            <label for="birthday">Dt. Nascimento</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" placeholder="dd/MM/AAAA">
                        </div>
                        
                    </div>
                    
                    
                    <div class="row">
                        
                    </div>
                    <br>
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </form>
            </div> --}}
        </div>
    </div>

    <script>
        var data = new Date();
        console.log(data.toLocaleDateString());
    </script>
@endsection
@include('layouts._includes.footer')