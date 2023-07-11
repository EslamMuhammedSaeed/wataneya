<a href="{{ route('web.team_members.show',$team_member->id) }}" class="col-xs-12 remove-padding news-item">
    <div class="img-frame">
        <img src="{{ asset('storage/' . $team_member->image) }}" alt="{{ $team_member->name }}">
    </div>
    <div class="col-xs-12 staff-detail">
        @if (LaravelLocalization::getCurrentLocale() == 'ar')
            <h4>{{ $team_member->name }}</h4>
            <h5>{{ $team_member->position }}</h5>
        @else
            <h4>{{ $team_member->name_en }}</h4>
            <h5>{{ $team_member->position_en }}</h5>
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
