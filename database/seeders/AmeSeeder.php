<?php

namespace Database\Seeders;

use App\Models\Ame;
use Illuminate\Database\Seeder;
class AmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        $cpt=1;
        $a = new Ame();
        $a->nom ="Emi";
        $a->sexe = true;
        $a->prix = 698;
        $a->couleur = "white";
        $a->date_de_naissance = "2002-03-15";
        $a->image_path= '/ame_'.$cpt++.'.jpg';
        $a->user_id=1;
        $a->save();

        $a = new Ame();
        $a->nom ="Emrold";
        $a->sexe = false;
        $a->prix = 5367;
        $a->couleur = "black";
        $a->date_de_naissance = "2002-03-26";
        $a->image_path= '/ame_'.$cpt++.'.jpg';
        $a->user_id=1;
        $a->save();

        $a = new Ame();
        $a->nom ="Tibo";
        $a->sexe = false;
        $a->prix = 777;
        $a->couleur = "cyan";
        $a->date_de_naissance = "1998-08-01";
        $a->image_path= '/ame_'.$cpt++.'.jpg';
        $a->user_id=1;
        $a->save();

        $a = new Ame();
        $a->nom ="Aurélia";
        $a->sexe = true;
        $a->prix = 12700;
        $a->couleur = "pink";
        $a->date_de_naissance = "2003-06-12";
        $a->image_path= '/ame_'.$cpt++.'.jpg';
        $a->user_id=2;
        $a->save();

        $a = new Ame();
        $a->nom ="Bellz";
        $a->sexe = false;
        $a->prix = 980;
        $a->couleur = "red";
        $a->date_de_naissance = "1666-11-23";
        $a->image_path= '/ame_'.$cpt++.'.jpg';
        $a->user_id=2;
        $a->save();
    }
}
