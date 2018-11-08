@extends('layout.base')

@section('title', 'Home')
@section('content')
    <h1>Mettre a jour un genre</h1>

    <form  action="/updateGenreAction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $actor->id }}">
      <input required type="text" name="name" value="{{ $genre->name }}">



      <input type="submit" name="" value="Update"></form>

@endsection
