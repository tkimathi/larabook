<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bower/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="bower/jquery.min.js"></script>
    <script src="bower/bootstrap.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();

        $('.comments_create-form').on('keydown', function(e) {
            if(e.keyCode == 13) {
                e.preventDefault();
                $(this).submit();
            }
        });
    </script>
</body>
</html>