@extends('layouts.app')
@include('layouts._includes.navbar')


@section('content')
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <section class="content-header">
                <h2>Membros</h2>
                <ol class="breadcrumb">
                    <li ><a href="">Home /</a></li>
                    <li ><a href="{{ route('site.panel.index') }}">Panel /</a></li>
                    <li>Members</li>
                </ol>
            </section>
            
            <div class="tabela">
                <div align="right">
                    <a href="{{ route('site.panel.member.create') }}">
                        <button class="btn btn-outline-info"><span class="fa fa-plus"></span> Novo Membro</button>
                    </a>
                </div>
                <table>
                    <tr>
                        <th width="40" align="center">Código</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th width="100">Congregação</th>
                        <th width="140">Nascimento</th>
                        <th width="130">Data de Cadastro</th>
                        <th width="155">Ações</th>
                    </tr>
                    
                    @foreach ($member as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->fname }}</td>
                        <td>{{ $m->lname }}</td>
                        <td><span style="background:blue; color:white; font-weight:bold; font-size:12px; border-radius:7px; padding: 0 5px 0 5px;">Matriz</span></td>
                        <td>{{ date('d-m-Y H:m', strtotime($m->birthday))}}</td>
                        <td>{{ date('d-m-Y H:m', strtotime($m->created_at))}}</td>
                        <td>
                            <div align="center">
                                <a href="{{ route('site.panel.member.create') }}"><button class="btn btn-success fa fa-search button-search"></button></a>
                                <a href="{{ route('site.panel.member.create') }}"><button class="btn btn-warning fa fa-pencil button-pencil"></button></a>
                                <a href="{{ route('site.panel.member.create') }}"><button class="btn btn-danger fa fa-trash-o button-trash"></button></a>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                </table> 
            </div> 
            {{-- paginação  --}}
            {{ $member->links() }}

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