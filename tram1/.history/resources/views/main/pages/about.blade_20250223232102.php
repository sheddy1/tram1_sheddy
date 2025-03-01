@include('main.about_component.header')
@include('main.about_component.about_section1')
@include('main.welcome_component.footer')
@include('main.welcome_component.not_available')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="icon" href="{{ asset('images/tream_logo_header.png') }}">
    <link rel="stylesheet" href="{{ asset('css/main/pages/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/home_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/not_available.css') }}">
</head>
<body>
    <div>
        @yield('header')
        @yield('not_available')
        @yield('footer')
    </div>

    {{--  <div>
        <img style="margin-left:130px" src="{{ asset('images/coming_soon.png') }}" alt="search" class="" >
        <h2 >Our Website is Comming Soon</h2>
    </div  --}}
</body>
</html>
