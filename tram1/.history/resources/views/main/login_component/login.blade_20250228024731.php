@section('login')

<div class="login">
    <span class="login_image">
        <span class="login_image_span">
            <span class="login_image_span_header">
                <span class="login_image_span_header1">
                    <img src="{{ asset('images/tream_logo_header.png') }}"
                    alt="logo" class="login_image_span_header1_icon">

                    <span class="login_image_span_header1_name">
                        The Right Answers Media
                    </span>
                </span>

                <span class="login_image_span_header1">
                    <button class="login_image_span_header1_button1">Log In</button>

                    <button class="login_image_span_header1_button">Sign up</button>
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
                <button class="login_image_span_header1_button2">Log In</button>

                <button class="login_image_span_header1_button3">Sign up</button>
            </span>
        </span>

        <span class="login_main_details">
            <text class="login_main_details1">Log IN</text>

            <text class="login_main_details2">Welcome Back</text>

            <text class="login_main_details3">We Are Glad to Have You</text>
        </span>

        <span class="login_main_header2">
            <input type="text" class="login_main_header2_txt" 
            placeholder="Email Address" name="email">
        </span>

        <span class="login_main_header2">
            <input type="text" class="login_main_header2_txt" 
            placeholder="Password" name="password">
        </span>

        <span class="login_main_header2"></span>

        <span class="login_main_extra"></span>

        <span class="login_main_header2"></span>

        <span class="login_main_header2"></span>
    </span>
</div>

@endsection
