<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function player()
    {
        $players = Player::orderBy('name')->get();
        return view('player.players', ['players' => $players]);
    }
    public function create()
    {
        $teamModel = new Team(); // Create an instance of the User model
        $teams = $teamModel->list(); // Call the list() method on the instance

        return view('player.create', ['teams' => $teams]);
    }

    public function store(Request $request){
        $request->validate([
            'team_id' => 'required',
            'ingame_name' => 'required',
            'role' => 'required',
            'rank' => 'required',
            'name' => 'required'
        ]);

        Player::create([
            'team_id' => $request->team_id,
            'name' => $request->name,
            'ingame_name' => $request->ingame_name,
            'rank' => $request->rank,
            'role' => $request->role
        ]);
        return redirect('/players')->with('message', 'A new player has been added');
    }

    public function edit(Player $player)
    {
        return view('player.edit', compact('player'));
    }

    public function update(Player $player, Request $request)
    {
        $request->validate([
            'ingame_name' => 'required',
            'rank' => 'required',
            'role' => 'required'
        ]);

        $player -> update($request->all());
        return redirect('/players')->with('message', "$player->ingame_name has been updated.");
    }

    public function delete(Player $player)
    {
        $player->delete();

        return redirect('/players')->with('message', "$player->ingame_name has been deleted.");
    }


}


