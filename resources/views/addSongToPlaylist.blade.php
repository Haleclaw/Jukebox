<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('add song to Playlist') }}
        </h2>
    </x-slot>

    
      @csrf
    <form method="POST" action="/addSongToPlaylist/push" class="grid place-items-center">
      @csrf
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-Playlist-name">
              Wat is de naam van de playlist?
            </label>
          </div>

          <div class="md:w-2/3">
            <input list="browsers" name="playlist" style="border-width: 2px;" placeholder="Default">
            <datalist id="browsers" >
              @foreach ($playlists as $key => $data)
                  <option value="{{$data->name}}">
              @endforeach
          </datalist>
          </div>
        </div>

        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit"> Toevoegen</button>
            </div>
          </div>

      </form>

</x-app-layout>