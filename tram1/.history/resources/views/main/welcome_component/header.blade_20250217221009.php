@section('header')

<div class="header1">
    <span class="header1_socials">
        <a href="#"><img src="{{ asset('images/facebook_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/twitter_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/linkedin_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/instagram_header.png') }}" class="header_socials_facebook" alt=""></a>
        <a href="#"><img src="{{ asset('images/youtube_header.png') }}" class="header_socials_youtube" alt=""></a>
    </span>

        <span class="header1_socials_drop">
            <input type="checkbox" id="header1_check" style="display: none">
            <label for="header1_check">
                <img src="{{ asset('images/social_drop.png') }}" class="header_socials_drop1" alt="">
            </label>

            <span class="header1_socials_drop_box">
                <table class="header1_socials_drop_box_table">
                    <tr><td><a href="#" class="a_general">Facebook</a></td></tr>
                    <tr><td><a href="#" class="a_general">Twitter</a></td></tr>
                    <tr><td><a href="#" class="a_general">Liknedin</a></td></tr>
                    <tr><td><a href="#" class="a_general">Instagram</a></td></tr>
                    <tr><td><a href="#" class="a_general">Youtube</a></td></tr>
                </table>
            </span>
        </span>



    <span class="header1_logo">
        <a href="#"><img src="{{ asset('images/tream_logo_header.png') }}" class="header1_logo_img"  alt=""></a>
        <text class="header1_logo_text">The Right Answers Media</text>
    </span>

    <span class="live">
        <span class="live_tv">
            <a href="" class="a_general"><text class="livetv_text">Live TV</text></a>
            <img src="{{ asset('images/red_dot.png') }}" class="livetv_dot"  alt="">
        </span>

        <span class="live_radio">
            <a href="" class="a_general"><text class="livetv_text">Live Radio</text></a>
            <img src="{{ asset('images/red_dot.png') }}" class="livetv_dot"  alt="">
        </span>
    </span>
</div>


<div class="header2">

    <span class="header2_links">
        <input type="checkbox" id="header2_menu" style="display: none">

        <label for="header2_menu">
            <img src="{{ asset('images/menu.png') }}" alt="search" class="header2_menu">
        </label>

        <table class="header2_menu_table">
            <tr><td><a href="#" class="a_general_header2_menu">Home</a></td></tr>
            <tr><td><a href="{{ route('videos') }}" class="a_general_header2_menu">Videos</a></td></tr>
            <tr><td><a href="#" class="a_general_header2_menu">News</a></td></tr>
            <tr><td><a href="#" class="a_general_header2_menu">About Us</a></td></tr>
            <tr><td><a href="#" class="a_general_header2_menu">Contact Us</a></td></tr>
        </table>

        <table class="header2_links_table">
            <tr>
                <td class="header2_links_table_main_td td_home_header_general"><a href="" class="a_general_header2">Home</a></td>
                <td class="td_home_header_general"><a href="" class="a_general_header2">Videos</a></td>
                <td class="td_home_header_general"><a href="" class="a_general_header2">News</a></td>
                <td class="td_home_header_general"><a href="" class="a_general_header2">About Us</a></td>
                <td class="td_home_header_general"><a href="" class="a_general_header2">Contact Us</a></td>
            </tr>
        </table>
    </span>
    <span class="header2_search_button">
        <span class="search">
            <input type="checkbox" id="header2_check" style="display: none">
            <span class="search_ext" >
                <input type="text" class="header2_search_text" placeholder="Seach News...">
                <img src="{{ asset('images/search.png') }}" alt="search" class="header2_search_btn1">

            </span>

            <label for="header2_check">
                <img src="{{ asset('images/search.png') }}" alt="search" class="header2_search_btn" id="header2_search_btn">
                <img src="{{ asset('images/close_green.png') }}" alt="search" class="header2_search_btn2" id="header2_search_btn2">
            </label>
        </span>

        <button class="header2_button">Advertise With Us</button>
    </span>
</div>



<script>
    document.getElementById("header2_search_btn").onclick = function() {
        document.getElementById("header2_search_btn2").style.visibility = "visible";
        document.getElementById("header2_search_btn").style.visibility = "hidden";
    };

    document.getElementById("header2_search_btn2").onclick = function() {
        document.getElementById("header2_search_btn").style.visibility = "visible";
        document.getElementById("header2_search_btn2").style.visibility = "hidden";
    };
</script>

@endsection
