<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genre list') }}
        </h2>
    </x-slot>

    <div class='grid grid-cols-3 gap-4'>
        @foreach($Genre as $key => $data)
            <x-jet-nav-link type="button" class='rounded-3xl bg-white hover:bg-white text-black font-bold py-2 px-4 m-2 rounded' href="/genreSongList/{{$data->id}}"> {{$data->name}} </x-jet-nav-link>
        @endforeach
    </div>

</x-app-layout>
