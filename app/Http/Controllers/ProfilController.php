<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Affichage des infos clients:

        $user =  User::find(Auth::user()->id);

        return view('profil.profil')->with(compact('user'));

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
        $user =  User::find($id);

        return view('profil.edit')->with(compact('user'));

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
        $this->validate($request, [
            'name' => 'required',
            'tel' => 'required|digits_between:6,15',
            'email' => 'required|email'
        ],
            [
                'name.required' => 'Nom obligatoire',
                'tel.required' => 'Tel obligatoire!',
                'tel.digits_between:6,15' => 'Le numéro de tel doit faire entre 6 et 15 chiffre!',
                'email.required' => 'L\'email est obligatoire!',
                'email.email' => 'l\'email donné n\'est pas valide'

            ]);




        $user = User::find($id);
        $user->name   = $request->name;
        $user->tel = $request->tel;
        $user->email = $request->email;

        //Le pb vient certainement de cette ligne, meme si le $request->password est vide il me change le mdp en bdd. Et le mdp
        //n'est pas exploitable de toute facon!
        if(isset($request->password) && !is_null($request->password)){
        $user->password = bcrypt($request->mdp);
        }


        $user->update();


        return redirect(url('/profile'));
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
