<!doctype html>
<html>
<head>
    <title>
        @yield('title','DO Project 3')
    </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type='text/css' rel='stylesheet'>
    <link href="{{ asset('/css/styles.css') }}" type='text/css' rel='stylesheet'>
    @yield('head')

</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">DO Project 3</a>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="container">
            <h1>Developer's Best Friend</h1>
            <p>Collection of tools to make development easier and faster. List of tools include Lorem Ipsum text generator, User Profile generator and xkcd Password generator.</p>
        </div>
    </div>

    <div class="container">
        <section>
            @yield('content')
        </section>
        <br/>
        <hr>

        <footer>
            <p>&copy; {{ date('Y') }} Project 3.</p>
        </footer>
    </div>

    @yield('body')

</body>
</html>
