<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Joke;

class Category extends Model
{
    protected $guarded = [];

    public function jokes()
    {
        return $this->hasMany(Joke::class);
    }
}
