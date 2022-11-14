<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genre Song list') }}
        </h2>
    </x-slot>

    <div class='grid grid-cols-3 gap-4'>
    @foreach($songs as $key => $data)
        <div class='rounded-3xl bg-white text-black font-bold py-2 px-4 m-2 rounded'>
            <h1> {{$data->title}} </h1>
            <p> artiest: {{$data->artist}} </p>
            <p> album: {{$data->album}} </p>
            <p> looptijd: {{$data->duration}} seconden </p>
            <x-jet-nav-link type="button" class='rounded-3xl bg-gray-50 text-black font-bold py-2 px-4 m-2 rounded' href="/songDetails/{{$data->id}}"> Details </x-jet-nav-link>
        </div>
    
    @endforeach
    </div>
    

</x-app-layout>