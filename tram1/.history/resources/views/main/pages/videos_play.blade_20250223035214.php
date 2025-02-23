@include('main.video_component.header')
@include('main.video_component.video')
@include('main.video_component.categories')
@include('main.video_component.videoMain')
@include('main.video_component.videoMain1')
@include('main.video_component.videoMain2')
@include('main.video_component.numbering')
@include('main.welcome_component.footer')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidoes</title>
    <link rel="icon" href="{{ asset('images/tream_logo_header.png') }}">
    <link rel="stylesheet" href="{{ asset('css/main/pages/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/home_header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/video_component/video.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/video_component/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/video_component/videoMain.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/video_component/numbering.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main/welcome_component/section2.css') }}">
</head>
<body>
    <div>
        @yield('header')
        @yield('video')
        @yield('categories')
        @yield('videoMain')
        @yield('videoMain1')
        @yield('videoMain2')
        @yield('numbering')
        @yield('footer')
    </div>

    {{--  <div>
        <img style="margin-left:130px" src="{{ asset('images/coming_soon.png') }}" alt="search" class="" >
        <h2 >Our Website is Comming Soon</h2>
    </div  --}}
</body>
</html>
