<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar fondo Pinotepa') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center mt-10">
        <p class="mx-6 my-4 text-center">Llenar el formulario, los campos con <strong class="text-red-500">*</strong> son requeridos </p>
        <form class="px-4 md:px-40 needs-validation w-full max-w-3xl" action="{{route('fondo_pnts.update', $fondo_pnt)}}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')
            <div class="mt-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">imagen: <strong class="text-red-500">*</strong> </label>
                <input type="file" id="img" name="img" value="{{$fondo_pnt->img}}" class="w-full file:px-4 file:py-2 file:rounded-full file:border-0 file:bg-gray-300 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full" placeholder="Elije una imagen">
                <p id="file-info" class="text-sm mx-auto justufy-center flex text-gray-600 mt-2">Archivo cargado:  <img src="{{ asset('storage/'.$fondo_pnt->img) }}" class="h-14 rounded-md ml-2"></p>
            </div>
            <div class="mt-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Descripcion:</label>
                <input type="text" id="desc" name="desc" value="{{ $fondo_pnt->desc}}" class="w-full py-2 px-4 font-sans file:border-gray-200 border-0 border-gray-200 bg-white rounded-full" placeholder="Descripción">
            </div>
            <div class="mx-auto text-center mt-6">
                <a class="bg-blue-200 hover:bg-blue-400 py-2 px-3 rounded-xl" href="{{route('fondo_pnts.index')}}">ATRÁS</a>
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
