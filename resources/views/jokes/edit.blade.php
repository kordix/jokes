@extends('layouts.app')
@section('content')
<div class="container">
<div class="form-group col-md-8">
    <label for="">Edytuj kawał id {{$joke->id}}</label>
    <form action="{{route('update', $joke->id)}}" method="POST">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        {{method_field('PATCH')}}
        <label for="title">Tytuł kawału</label>
    <input class="form-control" name="title" type="text" value="{{$joke->title}}" required>
    <label for="content">Treść (opcjonalnie)</label>
    <textarea class="form-control" style="margin-bottom:10px" name="content" type="text">{{$joke->jokecontent}}</textarea>

    <label for="category">Kategoria</label>

    <select name="category" id="">
        @foreach($categories as $category)
        <option value="{{$category->id}}" @if($joke->category_id == $category->id) selected @endif>{{$category->title}}</option>
        @endforeach
    </select>
    <label for="oldnew">Wiek</label>
    <select value="" name="ageid">
        @foreach($ages as $age)
            <option name="" id="" value="{{$age->id}}" @if($joke->age_id == $age->id) selected @endif >{{$age->title}}</option>
        @endforeach
    </select>
    <label for="oldnew">Wulgarne:</label>
    <select value="" name="vulgar_id">
        @foreach($vulgars as $vulgar)
        <option value="{{$vulgar->id}}" @if($joke->vulgar_id == $vulgar->id) selected @else dupa @endif>{{$vulgar->title}}</option>
        @endforeach
    </select>

    <label for="oldnew">Magiel:</label>
    <select value="" name="magiel">
        <option value="0">Nie</option>
        <option value="1" @if($joke->magiel==1) selected @endif>Tak</option>
    </select>

    <select name="tagid" id="">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" @if($joke->tag_id==$tag->id)selected @endif>{{$tag->title}}</option>
        @endforeach
    </select>
    <br>
    <input style="margin-top:10px" class="form-control" type="text" name="tag" placeholder="status(opcjonalne)">
    <br>
    <button class="btn btn-primary" type="submit">Zapisz</button>
    </form>


</div>

<form action="{{route('delete', $joke->id)}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}

<button type="submit" class="btn btn-danger">Usuń</button>

</form>



</div>

@endsection
