<html>
    <head>
        <title>App - @yield('title')</title>
             {!! Html::style('css/bootstrap.min.css') !!}
    </head>
    <body>
        @section('sidebar')
        @show
        <div class="container">
            @yield('content')
        </div>
        <div>
            @yield('result')
        </div>
{!! Html::script('js/jquery.min.js'); !!}
{!! Html::script('js/bootstrap.min.js'); !!}
    </body>
</html>
