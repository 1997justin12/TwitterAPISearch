<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 text-center">
                     @yield('content')
            </div>
        </div>
    </body>
</html>