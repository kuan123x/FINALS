<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['team_name', 'description', 'trophies'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function list()
    {
        $teams = Team::orderByRaw('team_name')->get();
        $list = [];
        foreach($teams as $team){
            $list[$team->id] = $team->team_name;
        }
        return $list;
    }
}
