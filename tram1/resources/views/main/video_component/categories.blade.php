@section('categories')

<div class="categries">
    <span class="categries1">
        <text class="categries1_txt">Featured Categories</text>
    </span>

    <span class="categries1">
        <span class="categories1_span">
            <img src="{{ asset('images/speech.png') }}" alt="views" class="categories1_span_image">
            <text class="categories1_span_txt">Politics</text>
        </span>

        <span class="categories1_span">
            <img src="{{ asset('images/briefcase.png') }}" alt="views" class="categories1_span_image">
            <text class="categories1_span_txt">Business</text>
        </span>

        <span class="categories1_span">
            <img src="{{ asset('images/theater.png') }}" alt="views" class="categories1_span_image">
            <text class="categories1_span_txt">entertainment</text>
        </span>
    </span>
</div>

@endsection
