<?php

namespace App\Livewire;

use App\Models\Ame;
use Livewire\Component;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $nom;
    public int $prix;
    public string $couleur;
    public string $date_de_naissance;
    public int $sexe;
    public int $user_id;
public int $count;


public Collection $ames;

public function mount(){
    $this->username='Emi Leviat';
    $this->count=0;
    $this->ames=Ame::all();
}
public function add(){
    $this->validate([
        'prix' => 'required|integer',
        'nom' => 'required|min:3|max:25',
        'couleur' => 'required',
        'date_de_naissance'=> 'required|date',

    ]);

    $a=new Ame();
    $a->nom=$this->nom;
    $a->prix=$this->prix;
    $a->couleur=$this->couleur;
    $a->date_de_naissance=$this->date_de_naissance;
    $a->sexe=$this->sexe;
    $a->user_id=auth()->user()->id;
    $a->save();
    $this->ames=Ame::all()->sortByDesc('id');

    $this->nom=" ";
    $this->prix=0;
    $this->couleur=" ";
    $this->date_de_naissance=" ";
    $this->sexe=0;

}
public function increment(){

    $this->count++;
}
    public function decrement(){

        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
