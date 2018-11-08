<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Actor as Actor;
use App\Genre as Genre;

class view extends Controller
{
    public function home()
    {
    return view('welcome');

    }
    public function serieList()
    { //get all series from series table via series model
      $series = Serie::all();
    //  dd($series[0]->genres);
      return view('serieList', ['series' => $series]);

    }
    public function addSerie()
    {
      //charger tous les genres
      //chager tous les acteurs
      $actors = Actor::all();
      $genres = Genre::all();
    return view('addSerie' , [
      "actors"=>$actors,
      "genres"=>$genres,
    ]);

    }
    public function updateForm(Request $request)
    {
      $actors = Actor::all();
      $genres = Genre::all();
      $serie = Serie::find($request->input('id'));
      return view('update', [
        'serie' => $serie,
        "actors"=>$actors,
        "genres"=>$genres,
      ]);
    }
    public function addActor()
    {
      $actors = Actor::all();
    //  dd($series[0]->genres);
      return view('addActors', ['actors' => $actors]);


    }
    public function addGenre()
    {
        $genres = Genre::all();

    return view('addGenre' , ['genres' => $genres]);

    }
    public function updateActor(Request $request)
    {

      $actor = Actor::find($request->input('id'));
      return view('updateActor', [

        "actor"=>$actor,

      ]);
    }
    public function updateGenre(Request $request)
    {

      $genre = Genre::find($request->input('id'));
      return view('updateGenre', [

        "genre"=>$genre,

      ]);
    }

}
