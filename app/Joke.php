<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Category;

class Joke extends Model
{
    protected $guarded=[];

    protected $attributes = [
           'status' => '-',
       ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'joke_tag', 'joke_id', 'tag_id');
    }

    // public function wulgarne(){
    //     return $this->belongs
    // }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
