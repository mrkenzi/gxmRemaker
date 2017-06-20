@extends('layout.gxm')

@section('title', 'All Games - Category '.$categoryInfo->category_name.' - Free Download')
@section('description', $categoryInfo->category_des)
@section('wallpaper',$categoryInfo->category_wallpaper)

@section('content')
    <div class="content">
        <div class="container">
            <h1 class="title-game"><strong>All Games On Category: <a href="/category/{{$categoryInfo->category_url}}" title="{{$categoryInfo->category_des}}" target="_blank">{{$categoryInfo->category_name}} - Free Download</a></strong>
            </h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="new-games">
                        @foreach($listGames as $game)
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
                </div>
                <div class="text-center">{{$listGames->links()}}</div>
            </div>
        </div>
    </div>
@stop