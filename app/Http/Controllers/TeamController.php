<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $teams = Team::orderBy('id')->get();
        return view('team.teams', ['teams' => $teams]);
    }
    public function create(){
        return view('team.create');
    }

    public function store(Request $request){
        $request->validate([
            'team_name' => 'required',
            'trophies' => 'required',
            'description' => 'required'
        ]);

        Team::create([
            'team_name' => $request->team_name,
            'trophies' => $request->trophies,
            'description' => $request->description
        ]);
        return redirect('/teams')->with('message', 'A new team has been added');
    }

    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Team $team, Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'trophies' => 'required',
            'description' => 'required'
        ]);

        $team -> update($request->all());
        return redirect('/teams')->with('message', "$team->team_name has been updated.");
    }

    public function delete(Team $team)
    {
        $team->delete();

        return redirect('/teams')->with('message', "$team->team_name has been deleted.");
    }


}
