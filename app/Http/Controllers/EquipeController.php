<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = $request['search'] ?? "";
        if($search != "")
        {
            $equipes = Equipe::where('nom','LIKE',"%$search%")->orWhere('adresseElectronique','LIKE',"%$search%")->get();
        }
        else
        {
            $equipes = Equipe::orderBy('nom')->get();
        }
            return view('festival.equipe.index', compact('equipes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('festival.equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'adressePostale'=> 'required',
        ]);

        $equipe = new Equipe;
        $equipe->nom = $request->nom;
        $equipe->indentiteResponsable = $request->indentiteResponsable;
        $equipe->adressePostale = $request->adressePostale;
        $equipe->nombrePersonnes = $request->nombrePersonnes;
        $equipe->nomPays = $request->nomPays;
        $equipe->stand = $request->stand;

        $equipe->save();

        return redirect('/equipe/')->with('status','La création a été effectué');
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
