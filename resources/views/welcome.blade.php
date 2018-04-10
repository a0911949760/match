<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>看護媒合平台</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
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
            }

            .links > a {
                color: #1F618D;
                background-color: #58D68D;
                padding: 3px 5px 3px 5px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin-right: 20px;
            }
            
            .m-b-md {
                margin-bottom: 30px;
            }

            .content-box {
                background: url(img/background.jpg);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="content-box flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">登入</a>
                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <i class="fab fa-accessible-icon"></i>看護媒合平台
                </div>

                <div class="links">
                    <a href="{{ route('register') }}"><i class="fas fa-users"></i> 看護註冊</a>
                    <a href="{{ url('/care/create') }}"><i class="fas fa-wheelchair"></i> 申請看護</a>
                </div>
            </div>
        </div>
    </body>
</html>
