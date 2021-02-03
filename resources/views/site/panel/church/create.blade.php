@extends('layouts.app')
@include('layouts._includes.navbar')

@section('content')
    <div id="panel" class="container">
        @include('layouts._includes.sidebar')
        <div class="main">
            <div class="formulario">
                <h2>Igreja: Inclusão</h2>
                <form action="#" method="post">
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
            </div>
        </div>
    </div>

    <script>
        var data = new Date();
        console.log(data.toLocaleDateString());
    </script>
@endsection
@include('layouts._includes.footer')