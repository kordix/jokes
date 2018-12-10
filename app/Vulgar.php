<?php

namespace App;

use App\Joke;
use Illuminate\Database\Eloquent\Model;

class Vulgar extends Model
{
    protected $guarded = [];


    public function jokes()
    {
        return $this->hasMany(Joke::class);
    }
}
