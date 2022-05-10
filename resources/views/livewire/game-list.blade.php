<div class="grid lg:grid-cols-4">

    @foreach($games as $game)
        <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48"
                 src="{{$game->image_url}}"
                 alt="product" />
            <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">{{$game->name}}</h4>
                <p class="leading-normal text-gray-700">{{$game->description}}</p>
            </div>
            <div class="flex space-x-2 pb-2 justify-center">
                <button type="button" class="inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Editar</button>
            </div>
        </div>
    @endforeach

</div>
