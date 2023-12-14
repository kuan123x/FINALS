<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = ['player_id',  'hero_name', 'hero_type'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
