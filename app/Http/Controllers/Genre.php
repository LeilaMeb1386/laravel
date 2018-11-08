<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
  public function insertGenre(Request $request)
  {
  //recuperer les données du formulaire
  //inserer une nouvelle serieList
  $actor = new \App\Genre;
  $actor->name = $request->input('name');
  $actor->save();

   return redirect('/serieList');
  }
  public function deleteGenre(Request $request)
  //ou \App\Serie::destroy($request->input('id'));
  //return redirect('/serieList')
  {
  $id = $request->id;
  $genre = \App\Genre::find($id);
  $genre->delete();
   return back();
  }
  public function updateGenre(Request $request)
{
 $genre = \App\Genre::find($request->input('id'));
 $genre->name = $request->input('name');
 $genre->save();
  return redirect('/addGenre');
 }
}
