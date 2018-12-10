<?php

namespace App\Http\Controllers;

use App\r;
use App\Joke;
use App\Tag;
use App\Category;
use App\Vulgar;
use App\Age;
use Illuminate\Http\Request;

class jokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Age::all();

        $agesgroups = Joke::all()->sortBy('age_id')->groupBy('age_id');

        foreach ($agesgroups as $agegroup) {
            $grouped[] =  $agegroup->sortByDesc('vulgar_id')->groupBy('vulgar_id');
        }

        // dd($agesgroups);

        for ($i=0; $i<3; $i++) {
            $nazwyepok[$i] = Age::find($i+1)->title;
        }

        for ($i=0; $i<3; $i++) {
            $vulgartitles[$i] = Vulgar::find($i+1)->title;
        }

        // dd($nazwyepok);

        // dd($grouped);

        $jokess = Joke::with('tags')->get();
        $tags=Tag::with('jokes')->get();
        $jokesnew = Joke::where('oldnew', '=', 'new')->orderby('vulgar')->get();
        $jokesaverage = Joke::where('oldnew', '=', 'average')->get();
        $jokesold = Joke::where('oldnew', '=', 'old')->get();

        return view('jokes.index2', compact('jokes', 'jokesnew', 'jokesaverage', 'jokesold', 'jokess', 'tags', 'ages', 'grouped', 'ageclass', 'nazwyepok', 'vulgartitles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        $vulgars = Vulgar::all();
        return view('jokes.create', compact('tags', 'categories', 'vulgars'));
    }

    public function edit($id)
    {
        $joke = Joke::find($id);
        $ages = Age::all();
        $categories = Category::all();
        $vulgars = Vulgar::all();
        $tags = Tag::all();

        return view('jokes.edit', compact('joke', 'tags', 'categories', 'vulgars', 'ages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Joke::create([
            'title'=>request('title'),
            'jokecontent'=>request('content'),
            'category_id'=>request('category_id'),
            'oldnew'=>request('oldnew'),
            'vulgar'=>request('vulgar'),
            'status'=>request('status', '-')
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $joke = Joke::find($id);
        $joke->tags()->attach(request('tagid'));
        Joke::find($id)->update([
            'title'=>request('title'),
            'jokecontent'=>request('content'),
            'category_id'=>request('category_id'),
            'age_id'=>request('ageid'),
            'vulgar_id'=>request('vulgar_id'),
            'status'=>request('status', '-')
        ]);

        session()->flash('message', 'zapisano zmiany');
        return back();
    }

    public function createtag()
    {
        return view('jokes.createtag');
    }

    public function storetag()
    {
        Tag::create([
            'title'=>request('title')
        ]);
        return back();
    }
}
