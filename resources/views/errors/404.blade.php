<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Event.ly</title>
</head>
<body>
    @include('partials.header')
    <div class="not-found">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="not-found__heading">404</h1>
                    <span class="not-found__description text-center">Przepraszamy ale strona, której szukasz nie istnieje</span>
                    <a href="/" class="not-found__button button text-white text-decoration-none">Strona główna</a>
                </div>
            </div>
        </div>
    </div>

</body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
