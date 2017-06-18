<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameDb;
use App\ModDb;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    //
    public function _viewGame(Request $rq)
    {
        $paramUrl = $rq->rqUrl;
        $itemGame = DB::table('games')
            ->join('game_category', 'games.game_category', '=', 'game_category.id')
            ->where('games.game_url', $paramUrl)
            ->first();
        $relatedGames = DB::table('games')
            ->join('game_category', 'games.game_category', '=', 'game_category.id')
            ->where('games.game_category', $itemGame->game_category)
            ->orderBy(DB::raw('RAND()'))
            ->limit(4)
            ->get();
        $popularGames = DB::table('games')
            ->join('game_category', function ($join) {
                $join->on('games.game_category', '=', 'game_category.id')
                    ->where('games.upcoming', '0')
                    ->where('games.game_active', '>', '0');
            })
            ->orderBy('games.count_view', 'desc')
            ->select('games.*', 'game_category.*')
            ->limit(6)
            ->get();
        $upcomingGames = DB::table('games')
            ->join('game_category', function ($join) {
                $join->on('games.game_category', '=', 'game_category.id')
                    ->where('games.upcoming', '>', '0')
                    ->where('games.game_active', '>', '0');
            })
            ->orderBy('games.created_at', 'desc')
            ->select('games.*', 'game_category.*')
            ->limit(6)
            ->get();
        return view('itemGame', ['itemGame'=> $itemGame,
            'relatedGames' => $relatedGames,
            'popularGames' => $popularGames,
            'upcomingGames' => $upcomingGames
        ]);
    }

    public function _homepage()
    {
        $list_category = DB::table('game_category')->get();
        $newGames = DB::table('games')
            ->join('game_category', function ($join) {
                $join->on('games.game_category', '=', 'game_category.id')
                    ->where('games.upcoming', '0')
                    ->where('games.game_active', '>', '0');
            })
            ->orderBy('games.created_at', 'desc')
            ->select('games.*', 'game_category.*')
            ->paginate(20);
        /*$popularGames = DB::table('games')
            ->join('game_category', function ($join) {
                $join->on('games.game_category', '=', 'game_category.id')
                    ->where('games.upcoming', '0')
                    ->where('games.game_active', '>', '0');
            })
            ->orderBy('games.count_view', 'desc')
            ->select('games.*', 'game_category.*')
            ->limit(20)
            ->get();
        $upcomingGames = DB::table('games')
            ->join('game_category', function ($join) {
                $join->on('games.game_category', '=', 'game_category.id')
                    ->where('games.upcoming', '>', '0')
                    ->where('games.game_active', '>', '0');
            })
            ->orderBy('games.created_at', 'desc')
            ->select('games.*', 'game_category.*')
            ->limit(20)
            ->get();*/
        /*$newMods = DB::table('mods')
            ->join('games', function ($join) {
                $join->on('mods.mods_game', '=', 'games.id')
                    ->where('mods.mods_active', '>', '0');
            })
            ->orderBy('mods.created_at', 'desc')
            ->select('mods.*', 'games.game_name', 'games.game_url')
            ->limit(20)
            ->get();*/
        return view('home', ['newGames' => $newGames]);
    }
}
