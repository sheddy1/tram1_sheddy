@section('news_section1')

<div class="news_section1">
    <span class="news_section1_span1">
        <span class="news_section1_span1_box1">
            <span class="news_section1_span1_box1_search">
                <input type="text" class="news_section1_span1_box1_search_input" placeholder="Search Article">
                <img src="{{ asset('images/search.png') }}" alt="calender" class="news_section1_span1_box1_search_icon">
            </span>

            <span class="news_section1_span1_box1_categories">
                <span class="news_section1_span1_box1_categories_header">
                    <text class="news_section1_span1_box1_categories_header_txt">
                        Categories
                    </text>
                </span>

                <span class="news_section1_span1_box1_categories_main">
                    Politics
                </span>

                <span class="news_section1_span1_box1_categories_main">
                    Business
                </span>

                <span class="news_section1_span1_box1_categories_main1">
                    Entertainment
                </span>
            </span>
        </span>

        <span class="news_section1_span1_box2">
            <span class="news_section1_span1_box2_categories_header">
                Top Stories
            </span>

            @for($i = 1; $i < 10; $i++)
                <span class="news_section1_span1_box2_categories_main">
                    <span class="news_section1_span1_box2_categories_main1">
                        {{ $i }}
                    </span>

                    <span class="news_section1_span1_box2_categories_main2">
                        <span class="news_section1_span1_box2_categories_main2_main">
                            Nigerian Senate Vows to Push for Conduct of Census in 2025
                        </span>

                        <span class="news_section1_span1_box2_categories_main2_footer">
                            <img src="{{ asset('images/images/article6_person.png') }}" alt="calender" class="news_section1_span1_box2_categories_main2_footer_image">

                            <text class="news_section1_span1_box2_categories_main2_footer_txt">
                                Micheal Ajdeolaba
                            </text>
                        </span>
                    </span>
                </span>
            @endfor

        </span>
    </span>

    <span class="news_section1_span2">
        <span class="news_section1_span2_box">
            @for($i = 1; $i < 3; $i++)
                <span class="news_section1_span2_box1">
                    <span class="newssection_main_span">
                        <span class="news_section1_span2_box1_span">
                            <span class="newssection_main_span_info1">
                                <img src="{{ asset('images/images/article1_person.png') }}" class="news_section1_span2_box1_span_image" alt="">

                                <text class="news_section1_span2_box1_span_txt">
                                    Mary Okechukwu
                                </text>
                            </span>

                            <span class="newssection_main_span_info2">
                                <text class="news_section1_span2_box1_span_txt">
                                    Nov. 3, 2024
                                </text>
                            </span>
                        </span>

                        <button class="news_section1_span2_box1_button">Article</button>

                        <text class="news_section1_span2_box1_text">
                            Nigerian Army in a Dilemma as New threats Arise from Bandits
                        </text>
                    </span>
                    <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
                    <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
                </span>
            @endfor

        </span>

        <span class="news_section1_span2_box">
            @for($i = 1; $i < 3; $i++)
            <span class="news_section1_span2_box1">
                <span class="newssection_main_span">
                    <span class="news_section1_span2_box1_span">
                        <span class="newssection_main_span_info1">
                            <img src="{{ asset('images/images/article1_person.png') }}" class="news_section1_span2_box1_span_image" alt="">

                            <text class="news_section1_span2_box1_span_txt">
                                Mary Okechukwu
                            </text>
                        </span>

                        <span class="newssection_main_span_info2">
                            <text class="news_section1_span2_box1_span_txt">
                                Nov. 3, 2024
                            </text>
                        </span>
                    </span>

                    <button class="news_section1_span2_box1_button">Article</button>

                    <text class="news_section1_span2_box1_text">
                        Nigerian Army in a Dilemma as New threats Arise from Bandits
                    </text>
                </span>
                <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
                <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
            </span>
            @endfor
        </span>

        <span class="news_section1_span2_box">
            @for($i = 1; $i < 3; $i++)
            <span class="news_section1_span2_box1">
                <span class="newssection_main_span">
                    <span class="news_section1_span2_box1_span">
                        <span class="newssection_main_span_info1">
                            <img src="{{ asset('images/images/article1_person.png') }}" class="news_section1_span2_box1_span_image" alt="">

                            <text class="news_section1_span2_box1_span_txt">
                                Mary Okechukwu
                            </text>
                        </span>

                        <span class="newssection_main_span_info2">
                            <text class="news_section1_span2_box1_span_txt">
                                Nov. 3, 2024
                            </text>
                        </span>
                    </span>

                    <button class="news_section1_span2_box1_button">Article</button>

                    <text class="news_section1_span2_box1_text">
                        Nigerian Army in a Dilemma as New threats Arise from Bandits
                    </text>
                </span>
                <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
                <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
            </span>
            @endfor
        </span>

        <span class="news_section1_span2_box">
            @for($i = 1; $i < 3; $i++)
            <span class="news_section1_span2_box1">
                <span class="newssection_main_span">
                    <span class="news_section1_span2_box1_span">
                        <span class="newssection_main_span_info1">
                            <img src="{{ asset('images/images/article1_person.png') }}" class="news_section1_span2_box1_span_image" alt="">

                            <text class="news_section1_span2_box1_span_txt">
                                Mary Okechukwu
                            </text>
                        </span>

                        <span class="newssection_main_span_info2">
                            <text class="news_section1_span2_box1_span_txt">
                                Nov. 3, 2024
                            </text>
                        </span>
                    </span>

                    <button class="news_section1_span2_box1_button">Article</button>

                    <text class="news_section1_span2_box1_text">
                        Nigerian Army in a Dilemma as New threats Arise from Bandits
                    </text>
                </span>
                <img src="{{ asset('images/images/cover.png') }}" alt="calender" class="newssection_main_cover_image">
                <img src="{{ asset('images/images/article5.png') }}" alt="calender" class="newssection_main_image">
            </span>
            @endfor
        </span>
    </span>
</div>

@endsection
