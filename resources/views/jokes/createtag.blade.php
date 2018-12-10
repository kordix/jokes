@extends('layouts.app')
@section('content')
<div class="container">
<div class="form-group col-md-6">
    <form action="{{route('storetag')}}" method="POST">
        {{csrf_field()}}
    <label for="title">Nazwa tagu</label>
    <input type="text" name="title" class="form-control" placeholder="Tag">
    <button class="btn btn-primary" type="submit">Zapisz</button>
    </form>
</div>
</div>

@endsection
