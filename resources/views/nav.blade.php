{{-- <nav id="navbar" class="fixed top-0 w-full h-24 flex items-center justify-between px-20 text-white bg-gray-900 transition-colors duration-300 z-50">
    <a href="#" class="w-1/3 max-w-[120px]">
        <img src="/img/logo-color.png" class="w-full" alt="Logo">
    </a>
    <input type="checkbox" id="menu" class="peer hidden">
    <label for="menu" class="cursor-pointer md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </label>
    <div class="hidden md:block text-sm font-medium text-center border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap font-bold">
            <!-- Menu Items -->
            <li class="me-2">
                <a href="/" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">INICIO</a>
            </li>
            <li>
                <a href="/comitan" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">COMITÁN</a>
            </li>
            <li>
                <a href="/tonala" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">TONALÁ</a>
            </li>
            <li>
                <a href="/villaflores" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">VILLAFLORES</a>
            </li>
            <li>
                <a href="/pinotepa" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">PINOTEPA</a>
            </li>
            <li>
                <a href="/viaplaza" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">VÍA PLAZA</a>
            </li>
            <li>
                <a href="/palenque" class="inline-block py-4 px-3 border-b-2 border-transparent rounded-t-lg hover:border-white hover:text-white">PALENQUE</a>
            </li>
        </ul>
    </div>

    Redes sociales
    <div class="hidden md:flex justify-center space-x-6 py-4">
        @if (Request::is('comitan'))
            <a href="https://tymqro.com/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/PlazaComitan" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @elseif (Request::is('tonala'))
            <a href="https://plazalasflores.com.mx/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/PlazaTonala" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @elseif (Request::is('villaflores'))
            <a href="https://casadedios.org/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/PlazaLasFlores" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @elseif (Request::is('pinotepa'))
            <a href="https://www.facebook.com/PlazaPinotepa" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/PlazaPinotepa" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @elseif (Request::is('viaplaza'))
            <a href="https://river-arena.org/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/ViaPlaza" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @elseif (Request::is('palenque'))
            <a href="https://tymqro.com/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/PlazaPalenque" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @else
            <!-- Redes sociales por defecto -->
            <a href="https://plazalasflores.com.mx/" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-facebook text-3xl hover:text-blue-800"></i>
            </a>
            <a href="https://www.instagram.com/DefaultPlaza" target="_blank" rel="noopener noreferrer" class="text-white transition-colors duration-300 flex items-center space-x-2">
                <i class="bi bi-instagram text-3xl hover:text-pink-800"></i>
            </a>
        @endif
    </div>
    
</nav> --}}

@php
    $location = request()->segment(1); // Esto obtiene el primer segmento de la URL, por ejemplo 'comitan'
@endphp


<nav id="navbar" class="bg-gray-900 fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo -->
        <div class="logo">
            <a href="/">
                <img src="/img/logo-color.png" alt="Logo" class="h-16">
            </a>
        </div>
        

        {{-- menu telefono --}}
        <ul class="sidebar menu sidebar fixed top-0 right-0 h-screen w-[250px] z-[999] backdrop-blur-md bg-gray-900/70 shadow-xl hidden flex-col items-start"> 
            <li onclick=hideSidebar() class="absolute right-3 top-3" ><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li class="mt-10 ml-6 text-white"><a href="/">Inicio</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/comitan">Comitán</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/tonala">Tonalá</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/villaflores">Villaflores</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/pinotepa">Pinotepa</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/viaplaza">Ciudad Hidalgo</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/palenque">Palenque</a></li>
            <li class="mt-6 ml-6 text-white"><a id="facebook-link-tel" href="#" class="block py-2 mr-20 md:py-0 hover:text-gray-300"><i class="bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
            <li class="mt-6 ml-6 text-white"><a id="instagram-link-tel" href="#" class="block py-2 mr-20 md:py-0 hover:text-gray-300"><i class="bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
        </ul>  

        <!-- Menú de Computadora -->
        <ul id="menu" class="menu flex flex-col md:flex-row md:items-center md:space-x-6 text-white font-bold">
            <!-- Elementos de menú visibles solo en pantallas medianas y grandes -->
            <li class="hidden md:block"><a href="/" class="block py-2 md:py-0 hover:text-gray-300">Inicio</a></li>
            <li class="hidden md:block"><a href="/comitan" class="block py-2 md:py-0 hover:text-gray-300">Comitán</a></li>
            <li class="hidden md:block"><a href="/tonala" class="block py-2 md:py-0 hover:text-gray-300">Tonalá</a></li>
            <li class="hidden md:block"><a href="/villaflores" class="block py-2 md:py-0 hover:text-gray-300">Villaflores</a></li>
            <li class="hidden md:block"><a href="/pinotepa" class="block py-2 md:py-0 hover:text-gray-300">Pinotepa</a></li>
            <li class="hidden md:block"><a href="/viaplaza" class="block py-2 md:py-0 hover:text-gray-300">Ciudad Hidalgo</a></li>
            <li class="hidden md:block"><a href="/palenque" class="block py-2 md:py-0 hover:text-gray-300">Palenque</a></li>
            <li class="hidden md:block"><a id="facebook-link" href="#" class="block py-2 md:py-0 hover:text-gray-300 ml-32"><i class="bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
            <li class="hidden md:block"><a id="instagram-link" href="#" class="block py-2 md:py-0 hover:text-gray-300"><i class="bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
            
            <!-- Icono de sidebar visible solo en pantallas pequeñas -->
            <li onclick="showSidebar()" class="block md:hidden">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed">
                        <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                    </svg>
                </a>
            </li>
        </ul>

    </div>
</nav>