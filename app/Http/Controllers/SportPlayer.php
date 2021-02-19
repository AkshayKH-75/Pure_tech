<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;
use App\Player;

class SportPlayer extends Controller
{
    function index()
    {
        $player['data'] = Player::all();
        return view('player',$player);
       
    }

    function addPlayer(request $request) {
        $player = new Player();
        if ($request->isMethod('post')) {
            $player->Player = $request->post('Player');
            $player->Birth_Country = $request->post('Birth_Country');
            $player->Team = $request->post('Team');
            $player->save();
            return $player;
        }
    }

    function getPlayer(request $request) {
        if ($request->isMethod('post')) {
            $player = $request->post('Player');
            $country = $request->post('Birth_Country');
            $team = $request->post('Team');

           
            //@todo : need to optimize
           
            if($player && $country && $team){
                $arr = Player::where(['Player' => $player,'Birth_country' => $country,'Team' => $team])->get();
                return $arr;
            }
            if($player && $country){
                $arr = Player::where(['player' => $player,'Birth_country' => $country])->get();
                return $arr;
            }
            if($player && $team){
                $arr = Player::where(['player' => $player,'Team' => $team])->get();
                return $arr;
            }
            if($country && $team){
                $arr = Player::where(['Birth_country' => $country,'Team' => $team])->get();
                return $arr;
            }
            if($player){
                $arr = Player::where(['Player'=>$player])->get();
                return $arr;
            }
            if($country){
                $arr = Player::where(['Birth_country' => $country])->get();
                return $arr;
            }
            if($team){
                $arr = Player::where(['Team' => $team])->get();
                return $arr;
            }
            if($player == 0){
                $arr = Player::all();
                return $arr;
            }
            
           

            
           
        }
    }
}
