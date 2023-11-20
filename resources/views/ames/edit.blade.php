@extends('layout')
@section('main')
    <div class="flex items-center justify-center h-auto">
        <div class="bg-gray-800 flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
            <div class="text-white">
                <h2>&bull;Modifier une Âme&bull;</h2>
            </div>

            <img src="/img/{{$ame->image_path}}" alt="" class="h-auto w-auto flex-none rounded-full bg-gray-50 mx-auto">
            <form method="post" action="/ames/{{$ame->id}}" class="flex flex-col space-y-8 mt-10">
                @csrf
                @method('PATCH')
                <input type="text" name="nom" value="{{$ame->nom}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('nom')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input value = "{{$ame->prix}}" type="number" name="prix" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('prix')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <input type="text" name="couleur" value="{{$ame->couleur}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('couleur')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                Hommes/Femmes <input type="checkbox" name="sexe" value="{{$ame->sexe ? 'Female' : 'Male'}}">
                <input type="date" name="date_de_naissance" value="{{$ame->date_de_naissance}}" class="border rounded-lg py-3 px-3 bg-gray-700 border-gray-700 placeholder-gray-500">
                @error('date_de_naissance')
                <p>{{$message}}</p>
                @enderror<br>
                <br>
                <button class="border border-blue-500 bg-blue-500 text-white rounded-lg py-3 font-semibold">Valider</button>
            </form>
@endsection
