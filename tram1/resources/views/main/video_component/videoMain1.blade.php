@section('videoMain1')

    <div class="videoMain">
        @for($i = 0; $i <= 2; $i++)
        <span class="section4_video" >
            <span class="section4_video_span">
                <text class="section4_video_span_txt">
                    The role technology Plays In The Nigerian Economy
                </text>

                <span class="section4_video_span_box">
                    <button class="section4_video_span_box_button">Technology</button>

                    <span class="section4_video_span_box1">
                        <img src="{{ asset('images/calender.png') }}" alt="play button" class="section4_video1_spanbox1_button">

                        <text class="section4_video1_spanbox1_txt">13th May, 2025</text>
                    </span>
                </span>

                <img src="{{ asset('images/play_button.png') }}" alt="play button" class="section4_video1_span_play_button">
            </span>

            <img src="{{ asset('images/images/cover.png') }}" alt="latest 1" class="section4_video1_span_cover">

            <img src="{{ asset('images/images/latest_video1.png') }}" alt="latest 1" class="section4_video1">
        </span>
        @endfor

    </div>

@endsection
