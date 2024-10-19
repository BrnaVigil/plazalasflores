<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editor socios comerciales Pinotepa') }}
        </h2>
    </x-slot>

    <div class="flex flex-col md:flex-row justify-around px-10 mt-5">
        <a class="bg-gray-200 hover:bg-gray-400 px-4 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('menu_pnts') }}">Regresar</a>
        <a class="bg-green-200 hover:bg-green-400 px-2 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('socios_pnts.create') }}">Agregar nuevo logo</a>
    </div>    
    <h1 class="font-bold mt-5 text-2xl md:text-4xl text-center">SOCIOS COMERCIALES</h1>
    <div class="scroll-container">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
            @foreach ($socios as $socios_pnt)
            <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
                <h2 class="text-xl font-bold mb-4">{{ $socios_pnt->nombre }}</h2>
                <img src="{{ asset('storage/'.$socios_pnt->img) }}" class="w-full h-auto rounded mb-4" width="200px">
                <div class="mt-auto flex justify-around items-center">
                    <div>
                        <a class="bg-blue-200 hover:bg-blue-400 px-4 py-2 rounded-md font-bold" href="{{ route('socios_pnts.edit', $socios_pnt) }}">Editar</a>
                    </div>
                    <div>
                        <form action="{{ route('socios_pnts.destroy', $socios_pnt) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-200 hover:bg-red-400 px-4 py-2 rounded-md font-bold" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>                
            </div>
            @endforeach
        </div>        
    </div>
</x-app-layout>
