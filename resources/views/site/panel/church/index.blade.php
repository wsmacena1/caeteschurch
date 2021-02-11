@extends('layouts.app')
@include('layouts._includes.navbar')


@section('content')
    <style>
        .top{
            padding: 10px;
            background: #151515;
            color: white;
            font-size: 30px;
        }
    </style>
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <section class="content-header">
                <h2>Igreja</h2>
                <ol class="breadcrumb">
                    <li ><a href="">Home /</a></li>
                    <li ><a href="{{ route('site.panel.index') }}">Panel /</a></li>
                    <li>Igreja</li>
                </ol>
            </section>
            
            <div class="tabela">
                <div align="right">
                    <a href="{{ route('site.panel.church.create') }}">
                        <button class="btn btn-outline-info"><span class="fa fa-plus"></span> Adicionar Igreja</button>
                    </a>
                </div>
                <table>
                    <tr>
                        <th width="40" align="center">Código</th>
                        <th>Nome</th>
                        <th width="140">CNPJ</th>
                        <th width="140">Setor</th>
                        <th width="130">Cadastro</th>
                        <th width="155">Ações</th>
                    </tr>
                    
                    @foreach ($church as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->cnpj }}</td>
                        <td>{{ $c->sector }}</td>
                        <td>{{ date('d-m-Y H:m', strtotime($c->created_at))}}</td>
                        <td>
                            <div align="center">
                                <a href=""><button class="btn btn-success fa fa-search button-search"></button></a>
                                <a href=""><button class="btn btn-warning fa fa-pencil button-pencil"></button></a>
                                <a href=""><button class="btn btn-danger fa fa-trash-o button-trash"></button></a>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                </table> 
            </div> 
            {{-- paginação  --}}
            {{ $church->links() }}

        </div>

    </div>

    <script>
        var data = new Date();
        console.log(data.toLocaleDateString());

        function randomNumber(number) {
            var result = Math.floor(Math.random()*number);
            return result;
        }

    </script>
@endsection

@include('layouts._includes.footer')