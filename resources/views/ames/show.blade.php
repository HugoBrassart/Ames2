@extends('layout')
@section('main')
    <div class="flex items-center justify-center h-screen bg-gray-800">
        <div class="bg-red-800 p-8 rounded-lg shadow-md">

            <div class="relative mb-4 overflow-hidden rounded-md ">

                <img {{$cpt=1}} class="w-full max-w-lg"  src="/img/ames/{{$ame->image_path='/ame_'.$cpt.'.png' }}" alt="{{ $ame->name }}"{{$cpt++}}>
                <div class="absolute inset-0 bg-black opacity-40"></div>

            </div>

            <ul class="text-white">
                <li><span class="font-bold text-cyan-100">ID:</span> {{ $ame->id }}</li>
                <li><span class="font-bold text-cyan-100">Nom:</span> {{ $ame->nom }}</li>
                <li><span class="font-bold text-cyan-100">Couleur:</span> {{ $ame->couleur }}</li>
                <li><span class="font-bold text-cyan-100">Prix:</span> {{ $ame->prix }} ₩€¥$</li>
                <li><span class="font-bold text-cyan-100">Date de naissance:</span> {{ $ame->date_de_naissance }}</li>
                <li><span class="font-bold text-cyan-100">Sexe:</span> {{ $ame->sexe ? 'Femelle' : 'Mâle' }}</li>
                <li><span class="font-bold text-cyan-100">Propriétaire:</span> {{ $ame->owner->name }}</li>
            </ul>
            <a href="/ames/{{$ame->id}}/edit">
                <button class="text-purple-700 font-bold text-xl">
                    Editer
                </button>
            </a>
        </div>
    </div>
@endsection
