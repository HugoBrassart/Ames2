
<div class="flex bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg">
    <div class="pl-20  pt-5 pb-5">
    {{--<div class=" w-80 mx-auto bg-red-800 p-5 rounded-md">
<input wire:model.live="username" type="text">
    <p>{{$username}}</p>
        <p><button wire:click="decrement" class=" bg-yellow-400 p-3 font-bold text-xl rounded-md">-</button>
            {{$count}}
            <button wire:click="increment" class=" bg-blue-500 p-3 font-bold text-xl rounded-md">+</button>
           </div>
</div> </p>--}}
        <div class="rounded-md border border-black p-4 bg-gray-50">
        <h1 class=" font-bold text-xl ">Créer une nouvelle Âme</h1>
        <div class=" flex justify-center mt-5">
        <div class=" ">
        <input wire:model.live="nom" name="nom" type="text" placeholder="Nom" class="m-2 rounded-md"  @error('nom') @enderror />
            @error('nom')
            <p class = 'text-sm text-red-600'>{{ $message }}</p>
            @enderror
        </div>
        <div class="">
        <input wire:model.live="prix" name="prix" type="number" placeholder="Prix" class="m-2 rounded-md" @error('prix') @enderror/>
            @error('prix')
            <p class = 'text-sm text-red-600'>{{ $message }}</p>
            @enderror
        </div>
            <div class="">
        <input wire:model.live="date_de_naissance" name="date_de_naissance" type="date" class="m-2 rounded-md" @error('date_de_naissance') @enderror/>
                @error('date')
                <p class = 'text-sm text-red-600'>{{ $message }}</p>
                @enderror
            </div>
              <div class="">
        <input wire:model.live="couleur" name="couleur" type="text" placeholder="Couleur" class="m-2 rounded-md" @error('couleur') @enderror/>
                  @error('couleur')
                  <p class = 'text-sm text-red-600'>{{ $message }}</p>
                  @enderror
        </div>

        <div class="">
                <p class="">Sexe : Mâle/Femelle</p>
        <input wire:model.live="sexe" type="checkbox" class="m-3 rounded-md "/>
            </div>
    </div>
        <x-button wire:click="add" class="ml-20 mt-5 text-center w-40">Créer</x-button>



<div class="mt-24 w-12/12">
            <table class=" mx-auto m-4 ">
                <thead class="bg-gray-200 border-b">
                <p class=" text-xl text-center">Liste des Âmes créées</p>
                <tr class="px-4 ">
                    <x-th>Id</x-th>
                    <x-th>Nom</x-th>
                    <x-th>Prix</x-th>
                    <x-th >Date de naissance</x-th>
                    <x-th>Couleur</x-th>
                    <x-th>Sexe</x-th>
                </tr>
                </thead>
                @foreach($ames as $ame)
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
            </div>
        </div>
</div>



