<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar fondo de inicio') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center mt-10">
        <form class="px-4 md:px-40 needs-validation w-full max-w-3xl" action="{{route('inicio.update', $index)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-gray-700 font-bold mb-2">Imagen</label>
                <input type="file" id="imagen" name="imagen" class="w-full file:px-4 file:py-2 file:rounded-full file:border-0 file:bg-gray-300 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full" placeholder="Tu nombre">
                <p id="file-info" class="text-sm mx-auto justufy-center flex text-gray-600 mt-2">Archivo cargado:  <img src="{{ asset('storage/'.$index->imagen) }}" class="h-14 rounded-md ml-2"></p>
            </div>
            <div>
                <label for="name" class="block text-gray-700 font-bold mb-2">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" value="{{ $index->descripcion}}" class="w-full py-2 px-4 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full">
            </div>
            <div class="mx-auto text-center">
                <a class="bg-blue-200 hover:bg-blue-400 py-2 px-2 rounded-xl" href="{{route('inicio.index')}}">ATRAS</a>
                <button type="submit" class="mt-4 py-2 px-2 bg-gray-200 hover:bg-gray-400 rounded-xl" id="guardarBtn">GUARDAR</button>    
            </div>
        </form>
    </div>
</x-app-layout>