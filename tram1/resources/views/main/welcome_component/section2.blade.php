@section('section2')

<div class="section2">
    <span class="videos">


        <swiper-container class="mySwiper" loop="true" space-between="0" autoplay="true">
            @for($i = 0; $i < 6; $i++)
            <swiper-slide>
                <span class="videos_cover">
                    <text class="videos_cover_header_text">Top Vidoes</text>

                    <a href="#">
                        <img src="{{ asset('images/play_button.png') }}" alt="search" class="videos_cover_play">
                    </a>

                    <button class="videos_cover_button">
                        Culture
                    </button>

                    <text class="videos_cover_text">
                        The Ever Changing Situation of The Nigerian Economy
                    </text>

                    <span class="videos_views">
                        <img src="{{ asset('images/view.png') }}" alt="views" class="videos_views_icon">
                        <text class="videos_views_text">32 Views</text>
                    </span>

                    <span class="videos_comments">
                        <img src="{{ asset('images/chat.png') }}" alt="views" class="videos_views_icon">
                        <text class="videos_views_text">24 Comments</text>
                    </span>
                </span>

                <img src="{{ asset('images/images/news1.png') }}" alt="search" class="swipper_slide1">
            </swiper-slide>
            @endfor

          </swiper-container>
    </span>

    <span class="articles">
        <span class="article1" >
            <button class="article1_button">Culture</button>
            <text class="article_text">The History of the Fulani People</text>
            <img src="{{ asset('images/images/article1.png') }}" alt="" class="article1_image">
            <span class="article1_info">
                <img src="{{ asset('images/images/article1_person.png') }}" alt="search" class="article1_person">
                <text class="article1_info_txt">Mary Okechukwu</text>
                <text class="article1_info_txt1">Nov. 3, 2024</text>
            </span>
        </span>

        <span class="article2">
            <button class="article1_button">Education</button>
            <text class="article_text">The Nigerian Education System</text>
            <img src="{{ asset('images/images/article2.png') }}" alt="" class="article1_image">
            <span class="article1_info">
                <img src="{{ asset('images/images/article2_person.png') }}" alt="search" class="article1_person">
                <text class="article1_info_txt">Johnson Emmanuel</text>
                <text class="article1_info_txt1">Nov. 16, 2024</text>
            </span>
        </span>
    </span>


</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


@endsection
