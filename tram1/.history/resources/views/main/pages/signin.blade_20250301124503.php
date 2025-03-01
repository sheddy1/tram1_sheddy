@include('main.login_component.signin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" href="{{ asset('images/tream_logo_header.png') }}">
    <link rel="stylesheet" href="{{ asset('css/main/login_component/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/pages/login.css') }}">
</head>
<body>
    <div>
        <div>
            @yield('login')
        </div>
    </div>
</body>
</html>
