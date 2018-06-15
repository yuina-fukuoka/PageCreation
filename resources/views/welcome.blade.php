<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page Creation</title>
        
         <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                text-align: center;
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
            
            
            /*オリジナル効果*/
            .result {
                background-image: url("/background.jpg");
                border: solid;
                width: 600px;
                height: 400px;
                margin: 50px;
                float: right;
            }
            
            
            .content {
                color: #000;
                font-size: 30px;
                margin:10px;
                width:300;
                height:200;
                border-radius: 100px;
            }
            
            .wrapper {
                margin: 30px;
                float: right;
            }
            
            .sidevar {
                margin: 30px;
                float: left;
            }
        </style>
    </head>
    <body>
<!--        <div class="flex-center position-ref full-height">
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
-->

    <header>
            
        </header>
        <div>
            <div class="title">
                Page Creation
            </div>
        </div>
        
        <aside class="sidevar">
            <section>
            <p>page title</p>
            <input type="text" name="title_color_1">
            <!--ここにコンソール（テキストエリア）を表示-->
            </section>
            <section>
            <p>background image</p>
            <button>sea</button><!--Formつける-->
            <button>sky</button>
            <button>flower</button>
            <br>
            <button>star</button><!--Formつける-->
            <button>rainbow</button>
            <button>cafe</button>
            </section>
        </aside>
        
        <div class="wrapper">
            <div class="result">
            <figure class="content">
                <img src="/cupcake.jpg" alt="mainimage">   
                <figcaption>recommendation</figcaption>
            </figure>
            </div>
        </div>
        <footer>
            
        </footer>
    
    
    </body>

</html>
