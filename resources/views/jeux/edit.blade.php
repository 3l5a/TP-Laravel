<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modifier un jeu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                <form action="{{route('jeux.update', $jeu->id)}}" method="POST">
                    @method('PUT') @csrf
                    <label for="titre">Modifier</label>
                    <input type="text" name="titre" id="" placeholder="{{$jeu->titre}}" class="text-black">
                    @error('titre')
                    <div class="text-red-500">{{$message}}</div>
                    @enderror

                    <br>
                    <label for="categorie">Catégorie :</label>
                    <select name="categorie" class="text-black">
                        @foreach($categories as $categorie)
                        <option value="{{$categorie->id}}" class="text-black">{{$categorie->libelle}}</option>
                        @endforeach
                    </select>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>