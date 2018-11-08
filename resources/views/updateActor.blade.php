@extends('layout.base')

@section('title', 'Home')
@section('content')
    <h1>Mettre a jour un acteur</h1>

    <form  action="/updateActorAction" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $actor->id }}">
      <input required type="text" name="firstname" value="{{ $actor->firstname }}">
      <input required type="text" name="lastname" value="{{ $actor->lastname }}">
    

      <input type="submit" name="" value="Update"></form>

@endsection
