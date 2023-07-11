<a href="{{ route('web.board.show',$board_member->id) }}" class="col-xs-12 remove-padding news-item">
    <div class="img-frame">
        <img src="{{ asset('storage/' . $board_member->image) }}" alt="{{ $board_member->name }}">
    </div>
    <div class="col-xs-12 staff-detail">
        @if (LaravelLocalization::getCurrentLocale() == 'ar')
            <h4>{{ $board_member->name }}</h4>
            <h5>{{ $board_member->position }}</h5>
        @else
            <h4>{{ $board_member->name_en }}</h4>
            <h5>{{ $board_member->position_en }}</h5>
        @endif
    </div>
</a>
<style>
    .staff-detail {
        height: 80px;
    }

    .team-main .news-item {
        height: auto;
    }
</style>
