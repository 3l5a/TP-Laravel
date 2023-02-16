<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{__('List of games')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Action</th>
                            <th class="p-4 pr-0 grid place-content-end"><a href="{{ route('jeux.create') }}"><x-insert-btn>Créer</x-insert-btn></a></th>
                        </thead>
                        @foreach($jeux as $jeu)
                        <tr>
                            <td>{{$jeu -> id}}</td>
                            <td>{{$jeu -> titre}}</td>
                            <td colspan="2">

                                <a href="{{ route('jeux.edit', $jeu->id) }}"><x-update-btn>Modifier</x-update-btn></a>
                                <a href="{{ route('jeux.show', $jeu->id) }}"><x-read-btn>Voir</x-read-btn></a>
                                <x-supprimer action="{{ route('jeux.destroy', $jeu->id) }}"></x-supprimer>
                            </td>
                        </tr>


                        @endforeach

                    </table>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>