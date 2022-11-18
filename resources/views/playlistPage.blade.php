<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mijn playlists') }}
        </h2>
    </x-slot>

 
        @foreach($playlist as $key => $data)
            <div class="rounded-3xl min-h-26 min-w-30 bg-blue-500 m-2 p-4 text-white">
                <p class='m-2'> Naam:  {{$data->name}} </p>
                <p class='m-2'> Beschrijving: {{$data->description}} </p>
                <x-jet-nav-link type="button" class='rounded-3xl bg-white hover:bg-white text-black font-bold py-2 px-4 m-2 rounded' href='/changePlaylist/{{$data->id}}'> edit playlist </x-jet-nav-link>
                <x-jet-nav-link type="button" class='rounded-3xl bg-white hover:bg-white text-black font-bold py-2 px-4 m-2 rounded' href="/deletePlaylist/{{$data->id}}"> delete playlist </x-jet-nav-link>
                <x-jet-nav-link type="button" class='rounded-3xl bg-white hover:bg-white text-black font-bold py-2 px-4 m-2 rounded' href="/myPlaylistSongs/{{$data->id}}"> songs </x-jet-nav-link>
            </div>
        @endforeach
        
    <div class="grid h-screen place-items-center">
        <x-jet-nav-link type="button" class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' href='/createPlaylist'> maak playlist </x-jet-nav-link>
    </div>

</x-app-layout>
