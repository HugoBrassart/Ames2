@extends('layout')
<div class="bg-gray-800 h-auto ">
@section('main')

<h1 class="uppercase px-6 py-4 text-center font-medium text-xl text-red-800 "> Toutes les Âmes<a href="../ames/create">   +   </a></h1>
<div class="flex flex-col ">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-gray-200 border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Id
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Nom
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Prix
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Date de naissance
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Couleur
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Sexe
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Détails
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $ames as $ame)
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100 ">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 border-1 border-gray-500">{{ $ame->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $ame->nom }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $ame->prix }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $ame->date_de_naissance }}</td>
                        <td class="px-6 py-4"> <div class="w-6 h-6 border rounded-full" style="background-color: {{ $ame->couleur }};"></div></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $ame->sexe ? 'femelle':'male'}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="/ames/{{ $ame->id }}">Voir plus</a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="/ames/{{ $ame->id }}/edit"><button class="bg-red-800 text-white rounded-lg py-3 font-semibold hover:bg-gray-800 px-10">Editer</button></a></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 "><form method="post" action="/ames/{{$ame->id}}">
                                @method("DELETE")
                                @csrf
                                <button class="bg-red-800 text-white rounded-lg py-3 font-semibold hover:bg-gray-800 px-10">Supprimer</button>
                            </form></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


