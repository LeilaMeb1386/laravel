<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    public function insertOne(Request $request)
    {
    //recuperer les données du formulaire
    //inserer une nouvelle serieList
    $serie = new \App\Serie;
    $serie->title = $request->input('title');
    $serie->publication_year = $request->input('publication_year');
    $serie->save();
    $serie->actors()->attach($request->input('actors'));
    $serie->genres()->attach($request->input('genres'));
     return redirect('/serieList');
    }

    //supprimer une serie
    public function deleteserie(Request $request)
    //ou \App\Serie::destroy($request->input('id'));
    //return redirect('/serieList')
    {
    $id = $request->id;
    $nSerie= \App\Serie::find($id);
    $nSerie->delete();
     return back();
    }

    //mettre a jour une serie
    public function updateOne(Request $request)
 {
   $serie = \App\Serie::find($request->input('id'));
   $serie->title = $request->input('title');
   $serie->publication_year = $request->input('publication_year');
   $serie->save();
    $serie->actors()->detach();
    $serie->genres()->detach();
   $serie->actors()->attach($request->input('actors'));
   $serie->genres()->attach($request->input('genres'));
   return redirect('/serieList');

 }
}
