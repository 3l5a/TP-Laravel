<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Jeu;
use Illuminate\Http\Request;

 

class JeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeux = Jeu::orderBy('id')->get();
        return view('jeux.index', ['jeux'=>$jeux]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jeux.create', ['message' => "Cette page n\'est pas encore développée"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jeu = Jeu::find($id);
        $categorie = $jeu->categorie; // categorie est un attribut, la fleche fait appel au getter
        return view('jeux.show', compact('jeu', 'categorie')); //tableau assoc jeu => $jeu, categorie => $categorie etc
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //affiche les infos d'un jeu avant modif
    {
        $jeu = Jeu::find($id);
        $categories = Categorie::all();
        return view('jeux.edit', [
            'jeu'=>$jeu,
            'categories'=>$categories
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)   //actual modification
    {
        if($request->validate([
            'titre'=>'required | string | max:45'// validateur de query pour éviter les injections utilisateur = obligatoire, varchar, longueur 45 //
        ])) {
        $titre = $request->input('titre'); // enregistre le texte entré comme titre
        $jeu = Jeu::find($id);
        $jeu->titre = $titre; // recup le nouveau titre

        $categorie_id = $request->input('categorie');
        $jeu->categorie_id = $categorie_id; 


        $jeu->save();
        return redirect()->route('jeux.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jeu::destroy($id);
        return redirect()->route('jeux.index');
    }
}
