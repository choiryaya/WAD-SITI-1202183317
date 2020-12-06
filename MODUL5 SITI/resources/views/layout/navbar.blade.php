<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body style="background: #F8F9FB;">

    <ul class="nav justify-content-center" style="margin-top: 1rem;">
        <li class="nav-item">
            <a class="nav-link" href="/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/product">PRODUCT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/order">ORDER</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/history">HISTORY</a>
        </li>
    </ul>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>