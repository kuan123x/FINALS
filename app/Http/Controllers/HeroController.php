<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Player;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero()
    {
        $heroes = Hero::orderBy('hero_name')->get();
        return view('hero.heroes', ['heroes' => $heroes]);
    }
    public function create()
    {
        $playerModel = new Player(); // Create an instance of the User model
        $players = $playerModel->list(); // Call the list() method on the instance

        return view('hero.create', ['players' => $players]);
    }

    public function store(Request $request){
        $request->validate([
            'player_id' => 'required',
            'hero_name' => 'required',
            'hero_type' => 'required',
        ]);

        Hero::create([
            'player_id' => $request->player_id,
            'hero_name' => $request->hero_name,
            'hero_type' => $request->hero_type,
        ]);
        return redirect('/heroes')->with('message', 'A new hero has been added');
    }

    public function edit(Hero $hero)
    {
        return view('hero.edit', compact('hero'));
    }

    public function update(Hero $hero, Request $request)
    {
        $request->validate([
            'hero_name' => 'required',
            'hero_type' => 'required'
        ]);

        $hero -> update($request->all());
        return redirect('/heroes')->with('message', "$hero->hero_name has been updated.");
    }

    public function delete(Hero $hero)
    {
        $hero->delete();

        return redirect('/heroes')->with('message', "$hero->hero_name has been deleted.");
    }


}

