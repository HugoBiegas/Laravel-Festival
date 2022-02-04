<?php

namespace App\Http\Controllers;

use App\Models\Attribution;
use Illuminate\Http\Request;
use App\Models\Etablissement;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissements = Etablissement::orderBy('nom')->get();
        $attributions = Attribution::all();
        return view('festival.etablissement.index', compact('etablissements', 'attributions'));
        $req="SELECT * From Attribution where idEtab='$id'";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $civiliteResponsable=array(
            "M.",
            "Mme ",
            "Melle ",
        );
        return view('festival.etablissement.create')->with('civiliteResponsable', $civiliteResponsable);
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
            'adresseRue'=> 'required',
            'codePostal'=> 'required',
            'ville'=> 'required',
            'telephone'=> 'required',
            'adresseElectronique'=> 'required',
            'nomResponsable'=> 'required',
        ]);

        $etablissement = new Etablissement;
        $etablissement->nom = $request->nom;
        $etablissement->adresseRue = $request->adresseRue;
        $etablissement->codePostal = $request->codePostal;
        $etablissement->ville = $request->ville;
        $etablissement->telephone = $request->telephone;
        $etablissement->adresseElectronique = $request->adresseElectronique;
        $etablissement->type = $request->type;
        $etablissement->civiliteResponsable = $request->civiliteResponsable;
        $etablissement->nomResponsable = $request->nomResponsable;
        $etablissement->prenomResponsable = $request->prenomResponsable;
        $etablissement->nombreChambresOffertes = $request->nombreChambresOffertes;
        $etablissement->save();

        return redirect('etablissement/')->with('status','La création a été effectué');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etablissement = Etablissement::findOrFail($id);
        return view('festival.etablissement.show', compact('etablissement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etablissement = Etablissement::findOrFail($id);
        $civiliteResponsable=array(
            "M.",
            "Mme ",
            "Melle ",
        );
        return view('festival.etablissement.edit', compact('etablissement', 'civiliteResponsable'));
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
        $etablissement = Etablissement::findOrFail($id);
        $request->validate([
            'nom'=> 'required',
            'adresseRue'=> 'required',
            'codePostal'=> 'required',
            'ville'=> 'required',
            'telephone'=> 'required',
            'adresseElectronique'=> 'required',
            'nomResponsable'=> 'required',
        ]);
        $etablissement->update($request->input());
        return redirect('etablissement/')->with('status','La modification a été effectué');
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
