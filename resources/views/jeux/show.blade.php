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

                    <h1>{{__('Game details')}}</h1>
                    <h2>Titre : {{$jeu->titre}}</h2>
                    <div class="
                                overflow-hidden 
                                shadow-sm 
                                rounded-lg ">
                        <div class="
                                    p-5 
                                    text-white 
                                    text-center 
                                    md:text-left">
                            id = {{$jeu->id}}</div>
                            <p class="bg-green-200 text-sm w-fit p-1.5 mt-3 text-black rounded-md"> {{$categorie->libelle}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>