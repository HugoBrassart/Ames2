@extends('layout')

@section('main')


    <form method="PATCH" action="/ames/edit" >
        @CSRF

        <input type="text" placeholder="nom" name="nom">
        <input type="checkbox" placeholder="sexe" name="sexe">
        <input type="number" placeholder="prix" name="prix">
        <input type="text" placeholder="couleur" name="couleur">
        <input type="date" placeholder="date" name="date_de_naissance">

        <button>Valider</button>
    </form>








@endsection


