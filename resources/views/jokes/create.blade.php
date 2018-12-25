@extends('layouts.app')
@section('content')
<div class="container">
<div class="form-group col-md-6">
    <form action="{{route('store')}}" method="POST">
        {{csrf_field()}}
        <label for="title">Tytuł kawału</label>
    <input class="form-control" name="title" type="text" required>
    <label for="content">Treść (opcjonalnie)</label>
    <textarea class="form-control" style="margin-bottom:10px" name="content" type="text" requierd></textarea>
    {{-- <label for="category">Kategoria</label> --}}
    {{-- <select name="category" id="" style="display:hidden">
        <option value="-" selected>brak</option>
        <option value="racist">rasistowskie</option>
        <option value="chauvinist">szowinistyczne</option>
        <option value="coarse">chamskie</option>
        <option value="short">krótkie</option>
        <option value="alcohol">alkoholowe</option>
        <option value="politics">polityczne</option>
        <option value="women">o kob</option>
        <option value="dry">suchary</option>
        <option value="tekst">teksty</option>
        <option value="stories">historyjki</option>
    </select> --}}
    <label for="oldnew">Wiek</label>
    <select value="" name="oldnew">
        <option name="" id="" value="new" selected>Nowe</option>
        <option name="" id="" value="average">Średnie</option>
        <option name="" id="" value="old">Stare</option>
    </select>
    <label for="oldnew">Wulgarne:</label>
    <select value="" name="vulgar">
        <option name="" id="" value="yes" selected>Nie</option>
        <option name="" id="" value="no">Tak</option>
        <option name="" id="" value="middle">Średnio</option>
    </select>
<label for="tagid">Kategoria</label>
    <select name="tagid" id="">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->title}}</option>
        @endforeach
    </select>
    <br>
    <label for="oldnew">Magiel:</label>
    <select value="" name="magiel">
        <option value="0">Nie</option>
        <option value="1" selected>Tak</option>
    </select>

    <input style="margin-top:10px" class="form-control" type="text" name="tag" placeholder="status(opcjonalne)">
    <br>
    <button class="btn btn-primary" type="submit">Zapisz</button>
    </form>


</div>

<div class="panel panel-default">
  <div class="panel-body">A Basic Panel</div>
</div>



</div>

@endsection
