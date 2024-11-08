<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar local Comitan') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center mt-10">
        <p class="mx-6 my-4 text-center">Llenar el formulario, los campos con <strong class="text-red-500">*</strong> son requeridos </p>
        <form class="px-4 md:px-40 needs-validation w-full max-w-3xl" action="{{route('local.update', $local)}}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoria <strong class="text-red-500">*</strong></label>
                <select id="categoria" name="categoria" class="w-full py-2 px-4 font-sans border-gray-200 border-0 bg-white rounded-full file:pr-10" required>
                    <option value="" disabled {{ old('categoria', $local->categoria) == '' ? 'selected' : '' }}>Selecciona una categoría</option>
                    <option value="alimentos" {{ old('categoria', $local->categoria) == 'alimentos' ? 'selected' : '' }}>Alimentos</option>
                    <option value="autoservicio" {{ old('categoria', $local->categoria) == 'autoservicio' ? 'selected' : '' }}>Autoservicio</option>
                    <option value="autos y motos" {{ old('categoria', $local->categoria) == 'autos y motos' ? 'selected' : '' }}>Autos y motos</option>
                    <option value="moda" {{ old('categoria', $local->categoria) == 'moda' ? 'selected' : '' }}>Moda</option>
                    <option value="tecnologia" {{ old('categoria', $local->categoria) == 'tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                    <option value="entretenimiento" {{ old('categoria', $local->categoria) == 'entretenimiento' ? 'selected' : '' }}>Entretenimiento</option>
                    <option value="salud y belleza" {{ old('categoria', $local->categoria) == 'salud y belleza' ? 'selected' : '' }}>Salud y belleza</option>
                    <option value="departamental" {{ old('categoria', $local->categoria) == 'departamental' ? 'selected' : '' }}>Departamental</option>
                    <option value="otros" {{ old('categoria', $local->categoria) == 'otros' ? 'selected' : '' }}>Otros</option>
                    <option value="locales dispinibles" {{ old('categoria', $local->categoria) == 'locales dispinibles' ? 'selected' : '' }}>Locales disponibles</option>
                </select>
                <div class="invalid-feedback font-bold">
                    Este campo es requerido                
                </div>                
            </div>
            <div class="mt-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Numero de local: <strong class="text-red-500">*</strong></label>
                <input type="text" id="local" name="local" value="{{$local->local}}" class="w-full py-2 px-4 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full" placeholder="Numero del local" required>
                <div class="invalid-feedback font-bold">
                    Este campo es requerido                
                </div>
            </div>
            <div class="mt-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nombre: <strong class="text-red-500">*</strong></label>
                <input type="text" id="nombre" name="nombre" value="{{$local->nombre}}" class="w-full py-2 px-4 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full" placeholder="Nombre" required>
                <div class="invalid-feedback font-bold">
                    Este campo es requerido                
                </div>
            </div>
            <div class="mx-auto text-center mt-6">
                <a class="bg-blue-200 hover:bg-blue-400 py-2 px-3 rounded-xl" href="{{route('local.index')}}">ATRÁS</a>
                <button type="submit" class="mt-4 py-2 px-2 bg-gray-200 hover:bg-gray-400 rounded-xl" id="guardarBtn">GUARDAR</button>    
            </div>
        </form>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</x-app-layout>