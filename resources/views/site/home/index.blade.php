@extends('layouts.app')
@include('layouts._includes.navbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="img-main col-sm-12">
                <div class="card">
                    <img src="img/desperta.jpg" alt="" style="width: 100%" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="img-main col-sm-4">
                <div class="card">
                    <img src="img/tercafeira.jpg" alt="Avatar" style="width: 100%" class="img-responsive">
                </div>
            </div>
            <div class="img-main col-sm-4">
                <div class="card">
                    <img src="img/sexta.jpg" alt="" style="width: 100%" class="img-responsive">
                </div>
            </div>
            <div class="img-main col-sm-4">
                <div class="card">
                    <img src="img/crux.jpg" alt="" style="width: 100%" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="div-about">
        <div class="div-about-1">
            <div class="div-about-text">
                <div>
                    <span class="nav-logo">A Igreja</span> 
                </div>
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            </div>
        </div>

        <div class="div-about-2">
            <div class="div-about-text">
                <div>
                    <span>O Pastor</span> 
                </div>
                Muitos morreram e muitos estão com sequelas na alma que parecem irreparáveis. A frequência aos cultos presenciais diminuíram. O enfraquecimento na fé é algo notório. <strong>LEVANTEM-SE, REAJAM. EU VOS ESFORÇO E AJUDO.</strong> Caetés, levante-se novamente!
                <br><br>
                <p>Pastor presidente José Mário da Silva</p>
            </div>
        </div>
    </div>
    <h2>Teste</h2>
@endsection

@include('layouts._includes.footer')