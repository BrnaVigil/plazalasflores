<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Editar imagenes del inicio') }}
        </h2>
    </x-slot>

    <div class="container py-12 mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{route('inicio.index')}}" class="block bg-lime-400 hover:bg-slate-400 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar imagen de fondo</h2>
                <p class="text-gray-700">Contenido de la primera tarjeta.</p>
            </a>
            <a href="{{route('socios_inicio.index')}}" class="block bg-teal-600 hover:bg-slate-400 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar los logos de socios comerciales</h2>
                <p class="text-gray-700">Contenido de la segunda tarjeta.</p>
            </a>
            <a href="{{route('interiores_inicios.index')}}" class="block bg-emerald-500 hover:bg-slate-400 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar las imagenes interiores de la vista inicio</h2>
                <p class="text-gray-700">Contenido de la segunda tarjeta.</p>
            </a>
        </div>
    </div>
</x-app-layout>