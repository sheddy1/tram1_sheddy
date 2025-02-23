@section('video')

<div class="video">

    <span class="video_span">
        <button class="videos_cover_button">
            Politics
        </button>

        <text class="videos_cover_text">
            Nathasha Apoti Behaviour to The Senate President
        </text>

        <span class="videos_views">
            <img src="{{ asset('images/view.png') }}" alt="views" class="videos_views_icon">
            <text class="videos_views_text">32 Views</text>
        </span>

        <span class="videos_comments">
            <img src="{{ asset('images/chat.png') }}" alt="views" class="videos_views_icon">
            <text class="videos_views_text">24 Comments</text>
        </span>

        <button onclick="window.location.href='{{ route('your.route.name') }}'">
            <img src="{{ asset('images/play_button.png') }}" alt="facebook" class="videos_play_button">
        </button>


        <img src="{{ asset('images/images/cover.png') }}" alt="facebook" class="video_span_cover">
    </span>

    <img src="{{ asset('images/images/video_play2.png') }}" alt="facebook" class="video_image">
</div>

@endsection
