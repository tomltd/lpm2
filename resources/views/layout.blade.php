<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lyle Property Management</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!--Google Analytics-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63408813-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="handy">Handyman Service</a></li>
                    <li><a href="garden">Gardening Service</a></li>
                    <li><a href="lawns">Lawns</a></li>
                    <li><a href="ground">Ground Works</a></li>
                    <li><a href="gates">Fences & Gates</a></li>
                    <li><a href="plumbing">Plumbing</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="app" class="container">

        @yield('nav')

        @yield('content')

        {{-- @yield('footer') --}}

    </div>

        <script src="../js/app.js"></script>
    </body>
</html>
