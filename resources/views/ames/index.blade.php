<x-app-layout>
<div class=" h-auto ">

<h1 class="uppercase px-6 py-4 text-center font-medium text-xl text-red-800 "> Toutes les Âmes<a href="../ames/create">   +   </a></h1>
<div class="flex flex-col ">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-gray-600 border-b">
                    <x-tr>
                        <x-th scope="col">Id</x-th>
                        <x-th scope="col"> Nom </x-th>
                        <x-th scope="col">  Prix</x-th>
                        <x-th scope="col">Date de naissance</x-th>
                        <x-th scope="col">Couleur </x-th>
                        <x-th scope="col"> Sexe</x-th>
                        <x-th scope="col">Détails</x-th>
                    </x-tr>
                    </thead>
                    <tbody>
                    @foreach( $ames as $ame)
                    <tr class="border border-black w-12">
                        <x-td>{{ $ame->id }}</x-td>
                        <x-td>{{ $ame->nom }}</x-td>
                        <x-td>{{ $ame->prix }}</x-td>
                        <x-td>{{ $ame->date_de_naissance }}</x-td>
                        <x-td> <div class="w-6 h-6 border rounded-full" style="background-color: {{ $ame->couleur }};"></div></x-td>
                        <x-td>{{ $ame->sexe ? 'Femelle' : 'Mâle'}}</x-td>
                        <x-td><a href="/ames/{{ $ame->id }}"><button class="bg-gray-500 text-white rounded-lg py-3 font-semibold hover:bg-red-800 px-10">Voir plus</button></a></x-td>
                        <x-td><a href="/ames/{{ $ame->id }}/edit"><button class="bg-gray-500 text-white rounded-lg py-3 font-semibold hover:bg-red-800 px-10">Editer</button></a></x-td>
                        <x-td><form method="post" action="/ames/{{$ame->id}}">
                                @method("DELETE")
                                @csrf
                                <button class="bg-gray-500 text-white rounded-lg py-3 font-semibold hover:bg-red-800 px-10">Supprimer</button>
                            </form></x-td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

</x-app-layout>

