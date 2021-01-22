@extends('layouts.app')
@include('layouts._includes.navbar')


@section('content')
    <div id="member" class="container">
        <h1>Members</h1>
        <br>
        <div align="right">
            <a href="{{ route('site.member.create') }}">
                <button class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg> Novo Membro
                </button>
            </a>
        </div>
        <br>
        <br>
        <table class="table table-striped   col-12">
            <thead>
                <tr class="d-flex">
                    <th class="col-1">#</th>
                    <th class="col-3">Nome</th>
                    <th class="col-2">Sobrenome</th>
                    <th class="col-2">Nascimento</th>
                    <th class="col-2">Data de Cadastro</th>
                    <th class="col-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($member as $m)
                <tr class="d-flex">
                    <td class="col-1">{{ $m->id }}</td>
                    <td class="col-3">{{ $m->fname }}</td>
                    <td class="col-2">{{ $m->lname }}</td>
                    <td class="col-2">{{ $m->birthday}}</td>
                    <td class="col-2">{{ date('d-m-Y H:m', strtotime($m->created_at))}}</td>
                    <td class="col-2">
                        <div>
                            <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg></button>
                            <button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg></button>

                            <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg></button>
                        </div>
                    </td>
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
        
        {{ $member->links() }}
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