<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formulaire.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $projet = new Projet;
        $projet->user_id = Auth::find()->id;
        $projet->nom  = $request->nom;
        $projet->email  = $request->email;
        $projet->tel  = $request->tel;
        $projet->nomduprojet  = $request->nomduprojet;
        $projet->fonction  = $request->fonction;
        $projet->adresse  = $request->adresse;
        $projet->nom  = $request->nom;
        $projet->fonction  = $request->fonction;
        $projet->adresse  = $request->adresse;
        $projet->email  = $request->email;
        $projet->tel  = $request->tel;
        $projet->contexte  = $request->contexte;
        $projet->demande  = $request->demande;
        $projet->objectif  = $request->objectif;
        $projet->contrainte  = $request->contrainte;
        $projet->validation  = 0;
        $projet->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
