<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* BACKGROUND */
       html{

            background-image: url("../../../images/background.png");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="container-fluid bg-transparent">
<header class="jumbotron mt-2 shadow-sm "  style="background-color:lightgreen;color:white">
    @yield('header')
</header>
    @yield('content')


</body>
</html>
