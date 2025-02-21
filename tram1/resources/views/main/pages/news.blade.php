@include('main.news_component.header')
@include('main.news_component.news_section')
@include('main.news_component.news_section1')
@include('main.video_component.numbering')
@include('main.welcome_component.footer')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
    <link rel="icon" href="{{ asset('images/tream_logo_header.png') }}">
    <link rel="stylesheet" href="{{ asset('css/main/pages/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/home_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/news_component/news_section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/news_component/news_section1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/news_component/news_section5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section6.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/video_component/numbering.css') }}">
</head>
<body>
    <div>
        @yield('header')
        @yield('news_section')
        @yield('news_section1')
        @yield('numbering')
        @yield('footer')
    </div>

    {{--  <div>
        <img style="margin-left:130px" src="{{ asset('images/coming_soon.png') }}" alt="search" class="" >
        <h2 >Our Website is Comming Soon</h2>
    </div  --}}
</body>
</html>
