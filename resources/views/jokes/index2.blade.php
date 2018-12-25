@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-5">
        <div class="row">
    <div class="panel panel-default">


</div>
</div>
</div>



{{-- @foreach($ages as $age)
    <h4>{{$age->title}}</h4>
    @foreach($age->jokes as $joke)
    <a href="{{route('edit', $joke->id)}}"><span class="badge @switch($joke->vulgar_id) @case(1) badge-danger @break @case(2) badge-warning @break @case(3)badge-info @break @endswitch   " style="font-size:14px">{{$joke->title}}</span></a>
    @endforeach
@endforeach --}}

{{--
@foreach($jokes as $joke)
    @foreach($joke as $jok)
        {{$jok->title}}
    @endforeach
@endforeach --}}

@foreach($grouped as $indexKey => $groupe)
    <br>
    {{$nazwyepok[$indexKey]}}
    @foreach($groupe as $indexKey2 => $group)
        <br>
        {{-- {{$vulgartitles[$indexKey2-1]}} --}}
        @foreach($group as $grou)
            <a href="{{route('edit', $grou->id)}}"><span class="badge @switch($grou->vulgar_id) @case(1) badge-danger @break @case(2) badge-warning @break @case(3)badge-info @break @endswitch" style="font-size:14px">{{$grou->title}}</span></a>

        @endforeach

    @endforeach
@endforeach






</div>



@endsection
