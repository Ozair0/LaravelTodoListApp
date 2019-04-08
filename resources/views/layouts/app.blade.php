<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

<footer id="footer" class="text-center">
    <p>Copyright &copy 2019 TodoList</p>
</footer>
</body>
</html>