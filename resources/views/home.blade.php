@extends('layout.gxm')

@section('title', 'Download Games Reloaded » PC Games, Cracks, Updates, DLCs, Patches, Repacks')
@section('description', 'Download Reloaded Games « PC Games, Torrent, Updates, DLCs, Patches, Repacks, Crack')
@section('wallpaper','http://imgs.gamexmod.com/res/wallpaper/batman-arkham-knight-download-crack.jpg')

@section('content')

    <div class="col-md-12">
            <div id="new-games">
                @foreach($newGames as $game)
                    <div class="col-md-3 new-game">
                        <div class="post-header">
                            <a href="/game/{{$game->game_url}}"
                                                      title="{{$game->game_name}}"><h2 class="post-title">{{$game->game_name}}</h2></a>
                        </div>
                        <div class="featured-media">
                            <a href="/game/{{$game->game_url}}" title="{{$game->game_name}}"
                               rel="bookmark" data-html="true"
                               data-toggle="popover"
                               data-trigger="hover"
                               title="<div class='title-pop'>{{$game->game_name}}</span>"
                               data-content="<div class='content-pop'>Description: {{$game->game_des}}</div>">
                                <img src="{{$game->game_thumbnail}}" class="img-responsive"
                                     alt="{{$game->game_name}}">
                            </a>
                        </div>
                        <div class="post-footer">
                            <a href="/category/{{$game->category_url}}"
                               title="{{$game->category_name}} Games Download">{{$game->category_name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        <div class="text-center">{{$newGames->links()}}</div>
            {{--<div id="popular-games" class="tab-pane">
                @foreach($popularGames as $game)
                    <div class="col-md-3 popular-game">
                        <div class="post-header">
                            <a href="/game/{{$game->game_url}}"
                               title="{{$game->game_name}}"><h2 class="post-title">{{$game->game_name}}</h2></a>
                        </div>
                        <div class="featured-media">
                            <a href="/game/{{$game->game_url}}" title="{{$game->game_name}}"
                               rel="bookmark">
                                <img src="{{$game->game_thumbnail}}" class="img-responsive"
                                     alt="{{$game->game_name}}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>--}}

            {{--<div id="upcoming-games" class="tab-pane">
                @foreach($upcomingGames as $game)
                    <div class="col-md-3 upcoming-game">
                        <div class="post-header">
                            <a href="/game/{{$game->game_url}}"
                               title="{{$game->game_name}}"><h2 class="post-title">{{$game->game_name}}</h2></a>
                        </div>
                        <div class="featured-media">
                            <a href="/game/{{$game->game_url}}" title="{{$game->game_name}}"
                               rel="bookmark">
                                <img src="{{$game->game_thumbnail}}" class="img-responsive"
                                     alt="{{$game->game_name}}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>--}}
        </div>
    </div>
@stop