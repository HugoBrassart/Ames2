<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ame;

class AmeController extends Controller
{
    public function index(){
        $ames= Ame::all();
        return view('ames.index', compact('ames'));
    }
    public function show(Ame $ame){
        return view('ames.show', compact('ame'));
    }
    public function create(){
        return view('ames.create');
    }
    public function update(Ame $ame){
        request()->validate([
            'prix' => 'required|integer',
            'nom' => 'required|min:5|max:25',
            'couleur' => 'required',
            'date_de_naissance'=> 'required|date',
        ]);

        $ame->nom = request()->nom;
        $ame->prix = request()->prix;
        $ame->couleur = request()->couleur;
        $ame->sexe = request()->sexe ? true : false ;
        $ame->date_de_naissance = request()->date_de_naissance;
        $ame->save();
        return redirect('/ames/'.$ame->id);

    }

    public function edit(Ame$ame){
        return view('ames.edit', compact('ame'));
    }
    public function destroy(Ame $ame){
        $ame->delete();
        return redirect('/ames');
    }

    public function store(){
        request()->validate([
            'prix' => 'required|integer',
            'nom' => 'required|min:5|max:25',
            'couleur' => 'required',
            'date_de_naissance'=> 'required|date',
        ]);

        $a=new Ame();
        $a->nom = request()->nom;
        $a->prix = request()->prix;
        $a->couleur = request()->couleur;
        $a->sexe = request()->sexe ? true : false ;
        $a->date_de_naissance = request()->date_de_naissance;
        $a->save();
        return redirect('/ames');
    }
}
