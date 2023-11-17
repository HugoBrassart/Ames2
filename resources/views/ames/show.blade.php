@extends('layout')

@section('main')
<div class="bg-red-800">
    <h1>Voir une âme </h1>
<img src="/img/ames/{{ $ame->image_path }}" alt="couleur de l'âme">
    <ul>
        <li> Id : {{ $ame->id }}</li>
        <li> Nom : {{ $ame->nom }}</li>
        <li> Prix : {{ $ame->prix}}</li>
        <li> Date de naissance : {{ $ame->date_de_naissance }}</li>
        <li> Couleur : {{ $ame->couleur }}</li>
        <li> Sexe : {{ $ame->sexe ? 'femelle':'male'}}</li>
        <li> Propriétaire : {{ $ame->owner->name }}</li>

    </ul>
    <a href="/ames/{{$ame->id}}/edit">
        <button>
            Editer
        </button>

    </a>
</div>

@endsection


