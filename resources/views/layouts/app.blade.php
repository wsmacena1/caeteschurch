<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <style>
        a:hover{
            color: initial;

        }
        a:link{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('navbar')
        <main>
            @if(Session::has('flash_message'))
            <div id="mfade" class="container notif">
                <div class="row">
                    
                    <div class="col-md-12 col-md-offset-1">
                        <div align="center" class="alert {{ Session::get('flash_message')['class'] }}">
                            {{Session::get('flash_message')['msg']}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @yield('content')
            @yield('footer')
        </main>
    </div>
    <script>
        setTimeout(function() {
            $('#mfade').fadeOut('slow');
        }, 2000);
    </script>

    {{-- <script>
        $(function(){
            $('#money').maskMoney({prefix:'R$ '});
        })
    </script> --}}

    <script type="text/javascript">
        $(document).ready(function(){
            $('.date').mask('00/00/0000');
            $('.time').mask('00:00:00');
            $('.date_time').mask('00/00/0000 00:00:00');
            $('#cep').mask('00000-000');
            $('.phone').mask('0000-0000');
            $('.phone_with_ddd').mask('(00) 0000-0000');
            $('.phone_us').mask('(000) 000-0000');
            $('.mixed').mask('AAA 000-S0S');
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('.money').mask('000.000.000.000.000,00', {reverse: true});
            $('.money2').mask("#.##0,00", {reverse: true});
            $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optio l: true
                    }
                }
            });
            $('.ip_address').mask('099.099.099.099');
            $('.percent').mask('##0,00%', {reverse: true});
            $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/,
                        fallback: '/'
                    },
                    placeholder: "__/__/____"
                }
            });
            $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
        });
    </script>
    <script src="{{ asset('site/jquery.js') }}" ></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    {{-- <script src="{{ asset('jquery_mask_plugin/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('jquery_mask_plugin/jquery.maskMoney.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('jquery_mask_plugin/jquery.mask.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/26c17cef37.js" crossorigin="anonymous"></script>
</body>
</html>