@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-5">
        <div class="row">
    <div class="panel panel-default">




        {{-- <h4>Tagi:</h4>
        @foreach($jokess as $joke)
            {{$joke->title}}
            @foreach($joke->tags as $tag)
            @endforeach
            <br>
        @endforeach --}}

        {{-- @foreach($tags as $tag)
        <b>{{$tag->title}}</b><br>
        @foreach($tag->jokes as $joke)
            {{$joke->title}}
        @endforeach
        <br>
    @endforeach

    @foreach($wulgarne as $wulgar)

    @endforeach

        {{-- <h4>Nowe:</h4>
            @foreach($jokesnew as $jokenew)
            <span class="badge badge-primary" style="font-size:14px">{{$jokenew->title}}</span>
            @endforeach --}}
</div>
</div>
</div>


<h4>Nowe</h4>
@foreach($jokesnew as $jokenew)
<a href="{{route('edit', $jokenew->id)}}"><span class="badge badge-danger" style="font-size:14px">{{$jokenew->title}}</span></a>
@foreach($jokenew->tags as $tag)
    {{$tag->title}}
@endforeach
@endforeach

<br>


<h4>Średnie</h4>
@foreach($jokesaverage as $jokeaverage)
<span class="badge badge-danger" style="font-size:14px">{{$jokeaverage->title}}</span>
@endforeach


<br>

    <h4>Stare:</h4>
    @foreach($jokesold as $jokeold)
    <span class="badge badge-danger" style="font-size:14px">{{$jokeold->title}}</span>
    @endforeach





<div class="panel panel-warning">

    <div class="panel-heading">fsaddfasfdfdsdffdsfads</div>
    <div class="panel-body"> fdsafdsfdsffd </div>
    <button class="btn btn-danger">fdsaf</button>
</div>
</div>



@endsection
