<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
 -->

@extends('layouts.app')

@section('content')
<!-- <div class="panel panel-default">
  <div class="panel-body">
    Panel content
  </div>
  <div class="panel-footer">Panel footer</div>
</div> -->

<div class="jumbotron">
    <h3>Conhecer dicas de aprimoramento<br>
    pessoal me trouxe confiança e agora<br> 
    é mais fácil me apresentar publicamente</h3> 
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome">
                </div>
                <div class="form-group input-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu endereço de e-mail">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-submit" type="submit">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Postagens E.-->
<section class="postagens">
    <div class="container">
        <div class="row" >
            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>


            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...] 
                </h4>
            </div>
        </div>
    </div>
</section>

<!--Postagens D.-->
<section class="postagens">
    <div class="container">
        <hr>
        <div class="row" >
            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...]</h4>
            
            </div>            
            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>



        </div>
    </div>
</section>

<!--Postagens E.-->
<section class="postagens">
    <div class="container">
        <hr>
        <div class="row" >
            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>


            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...]
                </h4>
            </div>
        </div>
    </div>
</section>

<!--Postagens D.-->
<section class="postagens">
    <div class="container">
        <hr>
        <div class="row" >
            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...]</h4>
            </div>           

            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>



        </div>
    </div>
</section>

<!--Postagens E.-->
<section class="postagens">
    <div class="container">
        <hr>
        <div class="row" >
            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>


            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...]
                </h4>
            </div>
        </div>
    </div>
</section>

<!--Postagens D.-->
<section class="postagens">
    <div class="container">
        <hr>
        <div class="row" >
            <!--Post-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <h1>Aonde posso conseguir um lorem ipsun ?</h1>
                </a>
                <h4>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney[...] 
                </h4>
            </div>

            <!--Imagens Post-->
            <div class="col-lg-6  col-md-12 col-sm-12 col-xs-12">
                <a href="wwww.articulese.com.br/page2">
                    <img src="{{ asset('images/1.png') }}" class="img-responsive" max-width="500">
                </a>
            </div>



        </div>
    </div>
</section>




@endsection