@section('footer')
<footer>
    <div class="row">
        <div class="col-md-2 logo">
            <span>ADCaetés</span>
        </div>
        <div class="col-md-2 channel">
            <span>Redes Sociais</span>
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="https://www.instagram.com/ad.caetes.oficial/">Instagram</a></li>
                <li><a href="#">Twiter</a></li>
                <li><a href="#">YouTube</a></li>
            </ul>
        </div>
        <div class="col-md-8 info">
            <span>Info</span>
            <ul>
                <li>
                    <a href="https://goo.gl/maps/7zuJzSxb6ECoRces7">
                        <img style="width: 4%;" src="img/gmaps.png" alt="">
                        R. João Magalhães, 44 - Bonsucesso
                        Rio de Janeiro - RJ
                        21042-190 
                    </a> 
                </li>
                <li>
                    <a href="#">
                        <img style="width: 4%;" src="img/gmail.png" alt="">
                        mail@caetes.com.br
                    </a>
                </li>
                <li hidden>@include('layouts._includes.maps')</li>
                <li></li>
            </ul>
        </div>

    </div>
</footer>
@endsection