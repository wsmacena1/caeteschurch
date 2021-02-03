@extends('layouts.app')
@include('layouts._includes.navbar')


@section('content')
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <section class="content-header">
                <h2>Usuários</h2>
                <ol class="breadcrumb">
                    <li ><a href="">Home /</a></li>
                    <li ><a href="{{ route('site.panel.index') }}">Panel /</a></li>
                    <li>Usuários</li>
                </ol>
            </section>
            
            <div class="tabela">
                <div align="right">
                    <a href="#">
                        <button class="btn btn-outline-info"><span class="fa fa-plus"></span> Novo usuário</button>
                    </a>
                </div>
                <table>
                    <tr>
                        <th width="40" align="center">Código</th>
                        <th>E-mail</th>
                        <th width="140">Cadastro</th>
                        <th width="140">Ult. Atualização</th>
                        <th width="130">Departamento</th>
                        <th width="155">Ações</th>
                    </tr>
                    
                    @foreach ($user as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ date('d-m-Y H:m', strtotime($u->created_at))}}</td>
                        <td>{{ date('d-m-Y H:m', strtotime($u->updated_at))}}</td>
                        <td>{{ $u->department_id }}</td>
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
            {{ $user->links() }}

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