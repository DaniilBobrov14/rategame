<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name'  , 'status', 'release_date', 'created_at_rg' 
    ];
}
