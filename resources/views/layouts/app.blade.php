<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Articulado') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
</head>
<body>

    <div id="app">
        @include('layouts._includes._nav')
        @if(Session::has('flash_message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div align="center" role="alert" class="alert {{Session::get('flash_message')['class']}}">
                            {{Session::get('flash_message')['msg']}}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('content')
    </div>
    @include('layouts._includes._footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>
</html>