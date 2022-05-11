<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    /**select table */
    protected $table='teams';
    /**select team A games */
    public function teamAgames(){
        return $this->hasMany(games::class, 'name');
    }
    /**select team B games */
    public function teamBgames(){
        return $this->hasMany(games::class, 'name');
    }
    public function team_club(){
        return $this->belongsTo(Clubs::class);
    }

}
