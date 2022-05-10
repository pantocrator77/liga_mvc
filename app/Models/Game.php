<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    /**select table */
    protected $table = 'games';
    /** get team A */
    public function teamA(){
        return $this->belongsTo(Teams::class);
    }
    /** get team B */
    public function teamB(){
        return $this->belongsTo(Teams::class);
    }   
}
