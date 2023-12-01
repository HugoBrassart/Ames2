<h1> LA LISTE DES AMES</h1>

<table class="w-11/12 mx-auto m-4">
    <thead class="bg-gray-100 border-b">
    <tr class="px-4 ">
        <x-th>Id</x-th>
        <x-th>Nom</x-th>
        <x-th>Prix</x-th>
        <x-th >Date de naissance</x-th>
        <x-th>Couleur</x-th>
        <x-th>Sexe</x-th>

    </tr>
    </thead>
@foreach(Auth::user()->ames as $ame)
<tr class="px-4 ">
    <x-td >{{$ame->id}}</x-td>
    <x-td >{{$ame->nom}}</x-td>
    <x-td >{{$ame->prix}} </x-td>
    <x-td>{{$ame->date_de_naissance}}</x-td>
    <x-td>{{$ame->couleur}}</x-td>
    <x-td>{{$ame->sexe}}</x-td>
</tr>
@endforeach
</table>



















