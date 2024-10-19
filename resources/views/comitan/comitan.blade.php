<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Editor Comitan') }}
        </h2>
    </x-slot>

    <div class="container py-12 mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="{{route('fondo.index')}}" class="block bg-lime-400 hover:bg-gray-400 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar imagen de fondo</h2>
                <p class="text-gray-700">Contenido de la primera tarjeta.</p>
            </a>
            <a href="{{route('socios.index')}}" class="block bg-teal-600 hover:bg-gray-400/50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar los logos de socios comerciales</h2>
                <p class="text-gray-700">Contenido de la segunda tarjeta.</p>
            </a>
            <a href="{{route('local.index')}}" class="block bg-emerald-500 hover:bg-gray-400/50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Cambiar y editar locales</h2>
                <p class="text-gray-700">Contenido de la segunda tarjeta.</p>
            </a>
            <a href="{{route('interiores.index')}}" class="block bg-orange-400 hover:bg-gray-400/50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h2 class="text-xl font-bold mb-2">Imagenes interiores</h2>
                <p class="text-gray-700">Contenido de la segunda tarjeta.</p>
            </a>
        </div>
    </div>
</x-app-layout>