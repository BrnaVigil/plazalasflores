<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cambiar fondo Palenque') }}
        </h2>
    </x-slot>
    {{-- Botones agregar y regresar --}}
    <div class="flex flex-col md:flex-row justify-around px-10 mt-5 mb-2">
        <a class="bg-gray-200 hover:bg-gray-400 px-4 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('menu_plqs') }}">Regresar</a>
        <a class="bg-green-200 hover:bg-green-400 px-2 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('fondo_plqs.create') }}">Agregar nueva imagen de fondo</a>
    </div>
    <h1 class="font-bold mt-5 text-2xl md:text-4xl text-center">IMAGENES DE FONDO PALENQUE</h1>
    <div class="scroll-container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
            @foreach ($fondos as $fondo_plq)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <p class="mb-2"><strong class="mr-2">Descripcion:</strong>{{ $fondo_plq->desc }}</p>
                    <img src="{{ asset('storage/'.$fondo_plq->img) }}" class="w-full h-auto rounded mb-4" width="200px">
                    <div class="flex justify-around items-center">
                        <div>
                            <a class="bg-blue-200 hover:bg-blue-400 px-4 py-2 rounded-md font-bold ml-10" href="{{ route('fondo_plqs.edit', $fondo_plq) }}">Editar</a>
                        </div>
                        <div>
                            <form action="{{ route('fondo_plqs.destroy', $fondo_plq) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-4 py-2 rounded-md font-bold ml-10" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>                
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
