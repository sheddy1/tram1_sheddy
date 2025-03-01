@section('signin')

<div class="login">
    <span class="login_image">
        <span class="login_image_span">
            <span class="login_image_span_header">
                <span class="login_image_span_header1">
                    <img src="{{ asset('images/tream_logo_header.png') }}"
                    alt="logo" class="login_image_span_header1_icon">

                    <span class="login_image_span_header1_name">
                        <a href="{{ route('welcome') }}" style="text-decoration: none; color:#DEF6F7">
                            The Right Answers Media
                        </a>
                    </span>
                </span>

                <span class="login_image_span_header1">
                    <button class="login_image_span_header1_button1" 
                    onclick="window.location.href='{{ route('login') }}'">Log In</button>

                    <button class="login_image_span_header1_button" 
                    onclick="window.location.href='{{ route('signin') }}'">Sign up</button>
                </span>
            </span>
        </span>
        <img src="{{ asset('images/images/login_image_bg1.png') }}"
        alt="background" class="login_image_image">
    </span>

    <span class="login_main">
        <span class="login_main_header">
            <span class="login_main_header1">
                <img src="{{ asset('images/tream_logo_header.png') }}"
                alt="background" class="login_main_header_logo">

                Tram News
            </span>

            <span class="login_main_header1">
                <button class="login_image_span_header1_button3" 
                onclick="window.location.href='{{ route('login') }}'">Log In</button>

                <button class="login_image_span_header1_button2" 
                onclick="window.location.href='{{ route('signin') }}'">Sign up</button>
            </span>
        </span>

        <span class="login_main_details">
            <text class="login_main_details1">Sign UP</text>

            <text class="login_main_details2">Welcome Back</text>

            <text class="login_main_details3">We Are Glad to Have You</text>
        </span>

        <span class="login_main_header2">
            <input type="text" class="login_main_header2_txt" 
            placeholder="Name" name="name">
        </span>

        <span class="login_main_header2">
            <input type="text" class="login_main_header2_txt" 
            placeholder="Email Address" name="email">
        </span>

        <span class="login_main_header2">
            <input type="text" class="login_main_header2_txt" 
            placeholder="Password" name="password">
        </span>

        <span class="login_main_extra">
            <span class="login_main_extra1">
                {{--  Forgot Password  --}}
            </span>

            <span class="login_main_extra2">
                <span class="login_main_extra2_span"></span>

                or

                <span class="login_main_extra2_span"></span>
            </span>
        </span>

        <span class="login_main_google">
            Sign Up With Google

            <img src="{{ asset('images/google.png') }}"
                alt="google" class="login_main_header2_icon">
        </span>

        <span class="login_main_button">Sign UP</span>
    </span>
</div>

@endsection
