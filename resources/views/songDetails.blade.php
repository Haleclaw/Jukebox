<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('song details') }}
        </h2>
    </x-slot>
    
    @foreach($song as $key => $data)
    <div class='content-center'>
        <div class='text-center rounded-3xl bg-white text-black font-bold py-2 px-4 m-2 rounded'>
            <h1> {{ $data->title}} </h1>
            <p> artiest: {{ $data->artist}} </p>
            <p> album: {{ $data->album}} </p>
            <p> looptijd: {{$data->duration}} seconden </p>
            <x-jet-nav-link type="button" class='rounded-3xl bg-gray-50 text-black font-bold py-2 px-4 m-2 rounded' href="/addSongToPlaylist/{{$data->id}}"> Toevoegen aan playlist </x-jet-nav-link>
            <x-jet-nav-link type="button" class='rounded-3xl bg-gray-50 text-black font-bold py-2 px-4 m-2 rounded' href="/test"> Toevoegen aan Queue </x-jet-nav-link>
        </div>
    </div>
    @endforeach


</x-app-layout>