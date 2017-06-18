@extends('layout.gxm')

@section('title', $itemGame->game_name)
@section('description', $itemGame->game_des)
@section('wallpaper',$itemGame->game_wallpaper)

@section('content')
    <div class="content">
        <div class="container">
            <h1 class="title-game"><strong>{{$itemGame->game_name}}</strong></h1>
            <div class="meta">
                <i class="fa fa-calendar"></i> {{date('d F Y', strtotime($itemGame->created_at))}}
                <i class="fa fa-folder-open"></i> <a href="/category/{{$itemGame->category_url}}"
                                                     title="{{$itemGame->category_name}} - Download Free">{{$itemGame->category_name}}</a>
                <i class="fa fa-gamepad" aria-hidden="true"></i> <a href="/game/{{$itemGame->game_url}}" target="_blank"
                                                                    rel="nofollow"
                                                                    title="{{$itemGame->game_seo}}">{{$itemGame->game_name}}</a>
                <span class="pull-right">{{$itemGame->count_view}} Views </i><i class="fa fa-eye"></i></span>
            </div>
            <hr/>
            <div class="blog">
                <div class="row">
                    <div class="col-md-8">
                        <div class="entry">
                            <div class="col-md-4">
                                <a href="/game/{{$itemGame->game_url}}"><img
                                            src="{{$itemGame->game_thumbnail}}"
                                            alt="{{$itemGame->game_seo}}"/></a>
                            </div>
                            <div class="col-md-8">
                                <p><span class="label label-primary">Title:</span> {{$itemGame->game_name}}</p>
                                <p><span class="label label-success">Category:</span> {{$itemGame->category_name}}</p>
                                <p><span class="label label-info">Release Date:</span> Updating...</p>
                                <p><span class="label label-danger">Description:</span> {{$itemGame->game_des}}</p>
                                <button class="btn btn-primary">Download</button>
                                <button class="btn btn-info">System Requirement</button>
                            </div>
                            <div class="col-md-12">
                                @php
                                $game_content = str_replace('<img','<img alt="'.$itemGame->game_name.' - Game Screenshot" width="100%"',$itemGame->game_content);
                                $game_content = str_replace('<iframe','<iframe width="100%" ',$game_content);
                                @endphp
                                {!! $game_content !!}
                                <span class="downloadzone"></span>
                                {!! $itemGame->downloadzone !!}
                            </div>
                        </div>
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="comments col-md-12">
                            <div class="title"><h5>Comments</h5></div>
                            <div class="fb-comments" data-href="{{Request::url()}}" data-width="100%"
                                 data-numposts="10"></div>
                        </div>
                    </div>
                    @include('parts.colright')
                </div>
            </div>
        </div>
    </div>
@stop