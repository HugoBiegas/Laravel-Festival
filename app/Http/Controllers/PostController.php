<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

	public function index()
	{
		return view('festival/index');
	}

	public function gestEquipe()
	{
		return view('festival/gestionEquipe');
	}

	public function detailEquipe()
	{
		return view('festival/detailEquipe');
	}

	public function creationEquipe()
	{
		return view('festival/creationEquipe');
	}

	public function addEkip(Request $request){
		$request->validate([
			'id'=>'required',
			'nom'=>'required',
			'identiteResponsable'=>'required',
			'adressePostale'=>'required',
			'nombrePersonnes'=>'required',
			'nomPays'=>'required',
			'stand'=>'required'
		]);

		$query = DB::table('Groupe')->insert([
			"id"=>$request->input('id'),
			"nom"=>$request->input('nom'),
			"identiteResponsable"=>$request->input('identiteResponsable'),
			"adressePostale"=>$request->input('adressePostale'),
			"nombrePersonnes"=>$request->input('nombrePersonnes'),
			"nomPays"=>$request->input('nomPays'),
			"stand"=>$request->input('stand')
		]);
	}

	public function modificationEquipe()
	{
		return view('festival/modificationEquipe');
	}

	public function suppressionEquipe()
	{
		return view('festival/suppressionEquipe');
	}

	public function listeEtablissements()
	{
		return view('festival/listeEtablissements');
	}

	public function consultationAttributions()
	{
		return view('festival/consultationAttributions');
	}

	public function modificationAttributions()
	{
		return view('festival/modificationAttributions');
	}

	public function creationEtablissement()
	{
		return view('festival/creationEtablissement');
	}

	public function modificationEtablissement()
	{
		return view('festival/modificationEtablissement');
	}

	public function detailEtablissement()
	{
		return view('festival/detailEtablissement');
	}

	public function suppressionEtablissement()
	{
		return view('festival/suppressionEtablissement');
	}

}



?>