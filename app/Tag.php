<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=['title'];

    public function jokes()
    {
        return $this->belongsToMany(Joke::class, 'joke_tag', 'tag_id', 'joke_id');
    }
}
