<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mon jeu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1>{{__('Category details')}}</h1>
                    <h2>Nom catégorie : {{$categorie->libelle}}</h2>
                    <div class="
                                overflow-hidden 
                                shadow-sm 
                                rounded-lg">
                        <div class="
                                    p-5 
                                    text-white 
                                    text-center 
                                    md:text-left">
                            id = {{$categorie->id}}</div>
                            <ul class="text-gray-400"> Liste de tous les jeux de cette catégorie :
                            @foreach($jeux as $jeu) 
                                <li class="text-white">{{$jeu->titre}}</li>
                            @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>