@extends('layout.base')

@section('title', 'Home')
@section('content')
    <h1>Mettre a jour une série</h1>

    <form  action="/updateSerieAction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $serie->id }}">
      <input required type="text" name="title" value="{{ $serie->title }}">
      <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">
      <select class="" name="actors">
@foreach ($actors as $actor)
  @if ($actor->id == $serie->actors[0]->id)
    <option selected value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
  @else
    <option value="{{ $actor->id }}">{{ $actor->completeName() }}</option>
  @endif
@endforeach
</select>
<select class="" name="genres">
@foreach ($genres as $genre)
  @if ($genre->id == $serie->genres[0]->id)
    <option selected value="{{ $genre->id }}">{{ $genre->name }}</option>
  @else
    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
  @endif
@endforeach
</select>
      <input type="submit" name="" value="Update"></form>

@endsection
