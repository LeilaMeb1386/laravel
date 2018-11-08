<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actor extends Controller
{
  public function insertActor(Request $request)
  {
  //recuperer les données du formulaire
  //inserer une nouvelle serieList
  $actor = new \App\Actor;
  $actor->firstname = $request->input('firstname');
  $actor->lastname = $request->input('lastname');
  $actor->save();

   return redirect('/addActors');
  }
  public function deleteActor(Request $request)
  //ou \App\Serie::destroy($request->input('id'));
  //return redirect('/serieList')
  {
  $id = $request->id;
  $Actor= \App\Actor::find($id);
  $Actor->delete();
   return back();
  }
  public function updateActor(Request $request)
{
 $actor = \App\Actor::find($request->input('id'));
 $actor->firstname = $request->input('firstname');
 $actor->lastname = $request->input('lastname');
 $actor->save();
  return redirect('/addActors');
 }
}
