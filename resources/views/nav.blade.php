@php
    $location = request()->segment(1); // Esto obtiene el primer segmento de la URL, por ejemplo 'comitan'
@endphp


<nav id="navbar" class="bg-green-pf fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between ">
        <!-- Logo -->
        <div class="logo">
            <a href="/">
                <img src="/img/logo-blanco-1.png" alt="Logo" class="h-28">
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
            <li class="mt-6 ml-6 text-white"><a href="/ciudadhidalgo">Ciudad Hidalgo</a></li>
            <li class="mt-6 ml-6 text-white"><a href="/palenque">Palenque</a></li>
            <li class="mt-6 ml-6 text-white"><a id="facebook-link-tel" href="#" class="block py-2 mr-20 md:py-0 hover:text-gray-300"><i class="bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
            <li class="mt-6 ml-6 text-white"><a id="instagram-link-tel" href="#" class="block py-2 mr-20 md:py-0 hover:text-gray-300"><i class="bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
        </ul>  

        <!-- Menú de Computadora -->
        <ul id="menu" class="menu flex md:flex-row md:items-center md:space-x-6 text-white font-normal">
            <!-- Elementos de menú visibles solo en pantallas medianas y grandes -->
            <li class="hidden md:block"><a href="/" class="block hover:text-gray-300 hover:underline">Inicio</a></li>
            <li class="hidden md:block"><a href="/comitan" class="block hover:text-gray-300 hover:underline">Comitán</a></li>
            <li class="hidden md:block"><a href="/tonala" class="block hover:text-gray-300 hover:underline">Tonalá</a></li>
            <li class="hidden md:block"><a href="/villaflores" class="block hover:text-gray-300 hover:underline">Villaflores</a></li>
            <li class="hidden md:block"><a href="/pinotepa" class="block hover:text-gray-300 hover:underline">Pinotepa</a></li>
            <li class="hidden md:block"><a href="/ciudadhidalgo" class="block hover:text-gray-300 hover:underline">Ciudad Hidalgo</a></li>
            <li class="hidden md:block"><a href="/palenque" class="block hover:text-gray-300 hover:underline">Palenque</a></li>
            <li class="hidden md:block"><a id="facebook-link" href="https://www.facebook.com/iprosur" class="block hover:text-gray-300 ml-32"><i class="bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
            <li class="hidden md:block"><a id="instagram-link" href="https://www.instagram.com/" class="block hover:text-gray-300"><i class="bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
            
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