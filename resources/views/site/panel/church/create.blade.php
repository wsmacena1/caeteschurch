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
                        <form action="{{ route('site.panel.church.store') }}" method="POST">
                            <div class="form-group row ">
                                <div class="col-sm-2" >
                                    <label class="col-form-label" for="cpf">Cnpj</label>
                                    <input type="text" class="form-control" id="cnpj"  placeholder="__.___.___/____-__">    
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-form-label" for="name">Congregação Nome</label>
                                    <input type="text" class="form-control" id="name"  placeholder="Nome Completo">    
                                </div>
                                <div class="col-sm-2">
                                    <label class="col-form-label" for="phone">Telefone</label>
                                    <input type="text" class="form-control" id="phone"  placeholder="Telefone">    
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
                            <button style="float: right; margin-top: 20px;" class="btn btn-success" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var data = new Date();
        console.log(data.toLocaleDateString());
    </script>
@endsection
@include('layouts._includes.footer')