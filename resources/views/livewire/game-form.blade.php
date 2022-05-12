<div class="mt-10 sm:mt-0">

    @include('partials.alert-message')

    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Información de los juegos</h3>
                <p class="mt-1 text-sm text-gray-600">Ingrese un nuevo juego o seleccione uno del listado para editarlo.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST" wire:submit.prevent="createEditGame">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6">
                                <label for="for_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input wire:model.defer="game.name" type="text" name="name" id="for_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('game.name') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="for_description" class="block text-sm font-medium text-gray-700">Descripción</label>
                                <input wire:model.defer="game.description" type="text" name="description" id="for_description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                @error('game.description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>


                            <div class="col-span-6">
                                <label for="for_url" class="block text-sm font-medium text-gray-700">Url</label>
                                <input wire:model.defer="game.url" type="text" name="url" id="for_url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                @error('game.url') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6 ">
                                <label for="for_image_url" class="block text-sm font-medium text-gray-700">Url Imagen</label>
                                <input wire:model.defer="game.image_url" type="text" name="image_url" id="for_image_url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                @error('game.image_url') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="for_status" class="block text-sm font-medium text-gray-700">Estado</label>
                                <select wire:model.defer="game.status_id" id="for_status" name="status_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @foreach($statuses as $status)
                                        <option value={{$status->id}}>{{$status->name}}</option>
                                    @endforeach
                                </select>

                                @error('game.status_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
