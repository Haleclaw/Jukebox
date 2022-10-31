<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My playlists') }}
        </h2>
    </x-slot>

    <div class="grid h-screen place-items-center">
        <x-jet-nav-link type="button" class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' href="{{ route('createPlaylist') }}"> maak playlist </x-jet-nav-link>
    </div>

</x-app-layout>
