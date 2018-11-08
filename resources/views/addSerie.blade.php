@extends('layout.base')

@section('title', 'Home')

@section('content')
    <h1>Ajouter une série</h1>

    <form method="post" action="/insertSerie">
  @csrf
     <label for="title">Title serie</label> : <input type="text" name="title"/>
     <label for="publication_year">Publication year</label> : <input type="number" name="publication_year" />
     <select class="" name="actors">
       @foreach($actors as $actor)
       <option value="{{ $actor->id}}">{{$actor->completeName() }}</option>
     @endforeach
     </select>
     <select class="" name="genres">
       @foreach($genres as $genre)
       <option value="{{ $genre->id}}">{{$genre->name }}</option>
     @endforeach
     </select>
     <input type="submit" value="Insert" />
</form>
@endsection
