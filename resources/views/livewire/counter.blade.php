
<div class="flex bg-gray-500">
    <div class="">
    {{--<div class=" w-80 mx-auto bg-red-800 p-5 rounded-md">
<input wire:model.live="username" type="text">
    <p>{{$username}}</p>
        <p><button wire:click="decrement" class=" bg-yellow-400 p-3 font-bold text-xl rounded-md">-</button>
            {{$count}}
            <button wire:click="increment" class=" bg-blue-500 p-3 font-bold text-xl rounded-md">+</button>
           </div>
</div> </p>--}}

    <x-input wire:model.live="nom" type="text" class="m-4"/>
    <x-input wire:model.live="prix" type="number" class="m-4"/>
    <x-button wire:click="add">Créer</x-button>

            <table class="w-12/12 mx-auto m-4">
                @foreach($ames as $ame)
                    <tr class="px-4 ">
                        <x-td >{{$ame->id}}</x-td>
                        <x-td >{{$ame->nom}}</x-td>
                        <x-td >{{$ame->prix}} </x-td>
                        <x-td>{{$ame->couleur}}</x-td>
                        <x-td>{{$ame->date_de_naissance}}</x-td>
                        <x-td>{{$ame->sexe}}</x-td>
                    </tr>
                @endforeach
            </table>
        </div>
</div>



