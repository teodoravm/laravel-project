<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Лаптoпи</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
</head>

<body>

    @section('navigation')
        @include('navigation')
    @show

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12">
                <p class="pull-right visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="jumbotron">

                    @section('maincontent')
                        @include('home')
                    @show

                </div>

            </div>
        </div>
        <footer>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zya3oKp4h9A6a8ikfRv7a8v5jrgg7PpP6Q/dtM8M" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqJ9GmbNo6y+f8wIlv6e+d3h0t3u+k6a06jpVXn6+p5K0" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-5N0T1NJ6Qn4Dym4L+xkhtH5QdXXQY1Fz5s5HtIHgW9qfwzD5rVZ8XyM0h4FwiqF1" crossorigin="anonymous"></script>
</body>
</html>