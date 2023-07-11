<a href="{{ route('web.news.show', $_news_item->id) }}" class="col-xs-12 remove-padding news-item">
    @php $images = json_decode($_news_item->image); @endphp
    @php if(LaravelLocalization::getCurrentLocale() == 'ar'){
        $title=$_news_item->title;
    }else{
        $title=$_news_item->title_en;
    } 
    @endphp
    @if ($images)
        @php $images = array_slice($images, 0, 3); @endphp
        @php $main_image = $images[0]; @endphp
    @endif
    <div class="img-frame">
        <img alt="{{ $title }}" src="@if (!filter_var($main_image, FILTER_VALIDATE_URL)) {{ Voyager::image($main_image) }}@else{{ $main_image }} @endif">
    </div>
    <div class="col-xs-12 news">
        <p>{{ $title }}</p>
    </div>
</a>

<style>
    .news p {
        margin-bottom: 10px !important;
        padding-top: 0px !important;
        height: 70px !important;
        display: grid;
        overflow: hidden !important;
        font-size: 14px !important;
        text-align: center !important;
        align-items: center;
    }
</style>
