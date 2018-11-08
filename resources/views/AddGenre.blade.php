@extends('layout.base')

@section('title', 'Home')

@section('content')
    <h1>Ajouter un genre de série</h1>

    <form method="post" action="/insertGenre">
  @csrf

     <label for="name">Nom genre</label> : <input type="text" name="name" />


     <input type="submit" value="Insert" />
</form>
<h1>Liste des genres</h1>
<div class="list">
<table>
       <tr>
         <th>name</th>
         <th>Delete</th>
         <th>Update</th>
       </tr>


             @foreach($genres as $genre)
               <tr>
                 <td>{{ $genre->name}}</td>



           <td><form class=""  action="/deleteGenre" method="POST"> @csrf <input type="hidden" name="id" value="{{ $genre->id }}"><input type="submit" name="" value="X"></form></td>
           <td><form class=""  action="/updateGenre" method="POST"> @csrf <input type="hidden" name="id" value="{{ $genre->id }}"><input type="submit" name="" value="U"></form></td>
         </tr>
       @endforeach

     </table>
   </div>
@endsection
