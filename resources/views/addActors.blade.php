@extends('layout.base')

@section('title', 'Home')

@section('content')
    <h1>Ajouter un acteur</h1>

    <form method="post" action="/insertActor">
  @csrf
     <label for="firstname">Prénom Acteur</label> : <input type="text" name="firstname"/>
     <label for="lastname">Nom Acteur</label> : <input type="text" name="lastname" />

     <input type="submit" value="Insert" />
</form>

<h1>Liste des acteurs</h1>
<div class="list">
<table>
       <tr>
         <th>firstname</th>
         <th>lastname</th>
         <th>Delete</th>
         <th>Update</th>
       </tr>


             @foreach($actors as $actor)
               <tr>
                 <td>{{ $actor->firstname}}</td>
                <td>{{ $actor->lastname}}</td>

      
           <td><form class=""  action="/deleteActor" method="POST"> @csrf <input type="hidden" name="id" value="{{ $actor->id }}"><input type="submit" name="" value="X"></form></td>
           <td><form class=""  action="/updateActor" method="POST"> @csrf <input type="hidden" name="id" value="{{ $actor->id }}"><input type="submit" name="" value="U"></form></td>
         </tr>
       @endforeach

     </table>
   </div>
@endsection
