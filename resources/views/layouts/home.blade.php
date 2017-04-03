<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
        <script type="text/javascript" src="{{asset('/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src ="{{asset('/js/twitter-api.js')}}"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="col-sm-12" style="padding: 150px">
                     @yield('content')
                </div>      
            </div>
        </div>
    </body>
</html>