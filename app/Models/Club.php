<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    /**select table */
    protected $table='clubs';
    /**select team A games */
    public function Club(){
        return $this->hasMany(teams::class, 'name');
    }
    
}
