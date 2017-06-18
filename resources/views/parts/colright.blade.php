<div class="col-md-4 col-sm-4">
    <div class="sidebar">
        <div class="widget">
            <h2><strong>Related Games</strong></h2>
            @foreach($relatedGames as $game)
                <a href="/game/{{$game->game_url}}" title="Download {{$game->game_name}}" target="_blank"
                   data-html="true"
                   data-toggle="popover"
                   data-trigger="hover"
                   data-placement="left"
                   title="<div class='title-pop'>{{$game->game_name}}</div>"
                   data-content="<div class='content-pop'>Description: {{$game->game_des}}</div>">
                    <img src="{{$game->game_wallpaper}}" width="100%" alt="{{$game->game_seo}}">
                    <p class="linkbar">{{$game->game_name}}
                    </p>
                </a>
            @endforeach
        </div>
        <div class="widget">
            <h2><strong>Upcoming Games</strong></h2>
            @foreach($upcomingGames as $game)
                <a href="/game/{{$game->game_url}}" title="Download {{$game->game_name}}" target="_blank"
                   data-html="true"
                   data-toggle="popover"
                   data-trigger="hover"
                   data-placement="left"
                   title="<div class='title-pop'>{{$game->game_name}}</div>"
                   data-content="<div class='content-pop'>Description: {{$game->game_des}}</div>">
                    <img src="{{$game->game_wallpaper}}" width="100%" alt="{{$game->game_seo}}">
                    <p class="linkbar">{{$game->game_name}}
                    </p>
                </a>
            @endforeach
        </div>
        <div class="widget">
            <h2><strong>Upcoming Games</strong></h2>
            @foreach($popularGames as $game)
                <a href="/game/{{$game->game_url}}" title="Download {{$game->game_name}}" target="_blank"
                   data-html="true"
                   data-toggle="popover"
                   data-trigger="hover"
                   data-placement="left"
                   title="<div class='title-pop'>{{$game->game_name}}</div>"
                   data-content="<div class='content-pop'>Description: {{$game->game_des}}</div>">
                    <img src="{{$game->game_wallpaper}}" width="100%" alt="{{$game->game_seo}}">
                    <p class="linkbar">{{$game->game_name}}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</div>