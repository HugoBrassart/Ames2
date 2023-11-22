<?php

namespace App\Livewire;

use App\Models\Ame;
use Livewire\Component;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $nom;
public int $prix;
public int $count;

public Collection $ames;

public function mount(){
    $this->username='Emi Leviat';
    $this->count=0;
    $this->ames=Ame::all();
}
public function add(){
    $a=new Ame();
    $a->nom=$this->nom;
    $a->prix=$this->prix;
    $a->couleur='red';
    $a->date_de_naissance='1976-03-11-';
    $a->sexe=1;
    $a->user_id=1;
    $a->save();
    $this->ames=Ame::all()->sortByDesc('id');

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
