<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editor locales Tonala') }}
        </h2>
    </x-slot>

    {{-- Botones agregar y regresar --}}
    <div class="flex flex-col md:flex-row justify-around px-10 mt-5 mb-2">
        <a class="bg-gray-200 hover:bg-gray-400 px-4 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('menu_tonala') }}">Regresar</a>
        <a class="bg-green-200 hover:bg-green-400 px-2 py-2 text-center rounded-md font-bold mb-2 md:mb-0" href="{{ route('local_tonala.create') }}">Agregar nuevo local</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        {{-- Tarjeta de categoria Alimentos --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col">
            <h2 class="text-2xl font-bold mb-4">Alimentos</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'alimentos')
                    <div class="flex justify-between items-center mb-4 hover:bg-slate-200 hover:px-1 hover:rounded-lg">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    
        {{-- Tarjeta de categoria Autoservicio --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Autoservicio</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'autoservicio')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tarjeta de categoria Autos --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Autos</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'autos')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tarjeta de categoria Ropa, calzado y accesorios --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Ropa, calzado y accesorios</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'ropa, calzado y accesorios')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    
        {{-- Tarjeta de categoria Hogar --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Hogar</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'hogar')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tarjeta de categoria Tecnologia --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Tecnologia</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'tecnologia')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tarjeta de categoria Entretenimiento --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Entretenimiento</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'entretenimiento')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        {{-- Tarjeta de categoria Locales disponibles --}}
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
            <h2 class="text-2xl font-bold mb-4">Locales disponibles</h2>
            @foreach ($locales as $local_tonala)
                @if($local_tonala->categoria == 'locales dispinibles')
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex mb-4 mt-2">
                            <span class="text-gray-600"># local {{$local_tonala->local}}</span>
                            <h3 class="text-sm font-bold ml-2 mt-1"> {{$local_tonala->nombre}}</h3>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <a class="bg-blue-200 hover:bg-blue-400 px-2 py-1 rounded-md font-bold" href="{{ route('local_tonala.edit', $local_tonala) }}">Editar</a>
                            <form action="{{ route('local_tonala.destroy', $local_tonala) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-200 hover:bg-red-400 px-2 py-1 rounded-md font-bold" type="submit">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    
</x-app-layout>