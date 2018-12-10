<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Joke;
use App\Vulgar;

class Age extends Model
{
    protected $guarded = [];

    public function jokes()
    {
        return $this->hasMany('App\Joke')->orderBy('vulgar_id', 'category_id');
    }

    public function jokesgroup()
    {
        return $this->hasMany('App\Joke')->groupBy('vulgar_id', 'category_id');
    }
}
