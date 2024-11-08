<x-guest-layout>
    
    <!-- Header -->
    <header>
        <nav id="navbar" class="bg-green-pf fixed w-full z-50">
            <div class="container mx-auto flex items-center justify-between ">
                <!-- Logo -->
                <div class="logo my-2">
                    <a href="/">
                        <img src="/img/logo-1.png" alt="Logo" class="h-20">
                    </a>
                </div>
                
        
                {{-- menu telefono --}}
                <ul class="sidebar font-bold menu sidebar fixed top-0 right-0 h-screen w-[250px] z-[999] backdrop-blur-md bg-green-900/50 shadow-xl hidden flex-col items-start"> 
                    <li class="absolute right-3 top-7">
                        <button onclick="hideSidebar()" class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed">
                                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                            </svg>
                        </button>
                    </li>                    
                    <li class="mt-20 ml-6 text-white"><a href="/">Inicio</a></li>
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
                    <li class="hidden md:block"><a href="/" class="block hover:text-gray-300 font-extrabold underline">Inicio</a></li>
                    <li class="hidden md:block"><a href="/comitan" class="block hover:text-gray-300 hover:underline">Comitán</a></li>
                    <li class="hidden md:block"><a href="/tonala" class="block hover:text-gray-300 hover:underline">Tonalá</a></li>
                    <li class="hidden md:block"><a href="/villaflores" class="block hover:text-gray-300 hover:underline">Villaflores</a></li>
                    <li class="hidden md:block"><a href="/pinotepa" class="block hover:text-gray-300 hover:underline">Pinotepa</a></li>
                    <li class="hidden md:block"><a href="/ciudadhidalgo" class="block hover:text-gray-300 hover:underline">Ciudad Hidalgo</a></li>
                    <li class="hidden md:block"><a href="/palenque" class="block hover:text-gray-300 hover:underline">Palenque</a></li>
                    <li class="hidden md:block"><a id="facebook-link" href="" class="block hover:text-gray-300 ml-32"><i class="hidden bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
                    <li class="hidden md:block"><a id="instagram-link" href="" class="block hover:text-gray-300"><i class="hidden bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
                    
                    <!-- Icono de sidebar visible solo en pantallas pequeñas -->
                    <li class="block md:hidden">
                        <button onclick="showSidebar()" class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed">
                                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
                            </svg>
                        </button>
                    </li>                    
                </ul>
        
            </div>
        </nav>
    
        {{-- imagen de fondo --}}
        <div class="flex items-center">
            <div class="slider-cont-fondo w-full relative"> <!-- Añadido relative para posicionar elementos absolutos -->
                <div class="slider-fondo h-full mt-24" id="slider-fondo">
                    @foreach ($inicio as $index)
                        <div class="slide-fondo">
                            <img loading="lazy" class="w-full h-screen object-cover" src="{{ asset('/storage/'.$index->imagen) }}" alt="Image 2">
                        </div>
                    @endforeach
                </div>
                {{-- Fondo gris transparente --}}
                <div class="absolute inset-0 bg-gray-800 bg-opacity-50"></div> <!-- Fondo gris transparente -->
        
                {{-- Texto y botones de fondo --}}
                <div class="absolute inset-0 flex flex-col text-center items-center justify-center z-10"> <!-- Añadido z-10 para asegurar que el texto esté encima -->
                    <div>
                        <h1 data-aos="zoom-in" class="text-3xl md:text-7xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-lg">
                            <br><strong id="changingText-tonala-vf">Las mejores marcas en un <br> solo lugar</strong>
                        </h1>
                    </div>             
                </div>                
            </div>
        </div>
        
    </header>

    <!-- Plazas comerciales, socios comerciales, visitas al mes -->
    <section class="overflow-x-hidden" data-aos="fade-up">
        <div class="grid grid-cols-1 md:grid-cols-2 md:p-24 gap-4 mb-10 mx-5">
            <div data-aos="fade-up-right" class="text-center grid grid-cols-2 gap-4">
                <div class="mt-4">
                    <img src="/img/centrosComerciales.png" class="h-28 md:h-48 mx-auto">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl md:text-6xl font-bold">6</h1>
                    <p class="text-xl md:text-3xl text-green-custon font-bold">Centros comerciales</p>
                </div>
            </div>        
            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/saludo.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-custon">+</strong>200</h1>
                    <p class="text-xl md:text-3xl text-green-custon font-bold">Socios comerciales</p>
                </div>
            </div>
            <div data-aos="fade-up-right" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/escuadra.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-custon">+</strong>500 mil</h1>
                    <p class="text-xl md:text-3xl text-green-custon font-bold">Invitados al mes</p>
                </div>
            </div>
            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/areaconstruida.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center text-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-custon">+</strong>170 mil</h1>
                    <p class="text-xl md:text-3xl text-green-custon font-bold">Metros cuadrados</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Un mercado de posibilidades --}}
    <section>
        <div class="h-xs md:h-72 md:py-32 md:p-24 text-white bg-cover bg-center flex items-center justify-center" style="background-image: url(/img/fondo-colores.jpg)">
            <h1 data-aos="flip-left" class="text-4xl md:text-6xl font-bold text-center">UN MERCADO DE POSIBILIDADES</h1>
        </div>                   
    </section>    

    {{-- Descripcion --}}
    <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-10 pb-32">
            <div data-aos="fade-right" class="relative mb-14 bg-white border-2 border-gray-300 rounded-md shadow-lg overflow-hidden md:-right-20 -right-10">
                <div class="slider-container w-full h-96 md:h-72">
                    <div class="slider-2 md:mt-0 bg-cover" id="slider-one">
                        @foreach ($interiores as $interior)
                            <div class="slide">
                                <img loading="lazy" class="rounded-md w-full h-full object-cover" src="{{ asset('storage/'.$interior->img) }}" alt="Image 2">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Columna de Texto -->
            <div data-aos="fade-left" class="relative bg-white border-2 border-gray-300 rounded-md shadow-lg p-6 md:top-20 md:-left-20 -left-10 -top-24 text-center">
                <i class="bi bi-caret-down-fill text-3xl text-center"></i>
                <p class="md:text-2xl text-justify leading-relaxed font-bold">
                    Estamos enfocados en el diseño, construcción y comercialización de inmuebles en zonas estratégicas de la región donde vamos de la mano con socios comerciales nacionales e internacionales que le apuestan al desarrollo de nuestro país. 
                </p>
            </div>
        </div>
    </section>

    {{-- Diseño vanguardia, ubicacion estrategica--}}
    <section class="bg-gray-200 pb-20 overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 md:p-10 gap-4 px-10">
            <div data-aos="fade-up-right">
                <div class="mt-10">
                    <img src="/img/diseño-vanguardista.png" class="h-28 md:h-16 mx-auto">
                    <p class="text-center font-bold text-2xl md:text-3xl mt-4">Diseño vanguardista</p>
                </div>
            </div>        
            <div data-aos="fade-up-left">
                <div class="mt-10">
                    <img src="/img/ubicación-estratégica.png" class="h-28 md:h-16 mx-auto">
                    <p class="text-center font-bold text-2xl md:text-3xl mt-4">Ubicación estratégica</p>
                </div>
            </div>
            <div data-aos="fade-down">
                <div class="mt-10">
                    <img src="/img/amplios-espacios.png" class="h-28 md:h-16 mx-auto">
                    <p class="text-center font-bold text-2xl md:text-3xl mt-4">Amplios espacios</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Nuestros socios comerciales --}}
    <section>        
        <div class="relative pb-32 bg-gray-600/10 pt-24 bg-cover bg-center bg-fixed" style="background-image: url(/fondos_prueba/fondo-inicio.jpeg);">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <h1 data-aos="zoom-in" class="relative z-10 text-5xl md:text-6xl font-bold text-white text-center">Nuestros socios<strong class="text-lime-400"> comerciales</strong></h1>
        </div>        
        
        <div class="py-10">
            {{-- slider de derecha a izquierda --}}
            <div class="slider-container w-full mt-16">
                <!-- Slider hacia la izquierda -->
                <div class="slider flex" style="animation-name: slideToLeft;">
                    @foreach ($socios as $socio)
                        <img src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                    @endforeach
                    
                    <!-- Repetición de los logos para el efecto de bucle infinito -->
                    @foreach ($socios as $socio)
                        <img src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                    @endforeach
        
                </div>
            </div>
            
            {{-- slider de izquierda a derecha --}}
            <div class="slider-container mt-20">
                <div class="slider-left flex">

                    @foreach ($socios as $socio)
                        <img src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                    @endforeach

                    @foreach ($socios as $socio)
                        <img src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    {{-- Se parte de nosotros --}}
    <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:p-10 gap-4 h-40" style="background-image: url(/img/fondo-colores.jpg);">
            <div>
                <div class="text-center text-white font-bold text-5xl md:text-6xl my-48">
                    SE PARTE DE NOSOTROS
                </div>
            </div>
        </div>
    </section>

    {{-- Mision, vision y valores --}}
    <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 md:p-10 gap-4 my-10 mx-5">
            <div data-aos="fade-up-right">
                <div class="mt-10">
                    <img src="/img/mision.png" class="h-28 md:h-16 mx-auto">
                    <div>
                        <h1 class="text-center font-bold text-3xl">Misión</h1>
                        <p class="text-center font-medium text-xl md:text-2xl mt-4">Ser un espacio de encuentro para la comunidad, que brinde las mejores opciones de compras, servicios y entretenimiento, a través de instalaciones cómodas, limpias y seguras.</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up-left">
                <div class="mt-10">
                    <img src="/img/vision.png" class="h-28 md:h-16 mx-auto">
                    <div>
                        <h1 class="text-center font-bold text-3xl">Visión</h1>
                        <p class="text-center font-medium text-xl md:text-2xl mt-4">Consolidarnos como el principal destino comercial de la comunidad con la participación de las mejores marcas nacionales e internacionales, generando valor a nuestros socios comerciales.</p>
                    </div>                
                </div>
            </div>

            <div data-aos="fade-down">
                <div class="mt-10">
                    <img src="/img/valores.png" class="h-28 md:h-16 mx-auto">
                    <div>
                        <p class="text-center font-bold text-2xl md:text-3xl mt-4">Valores</p>
                        <ul class="font-medium text-xl md:text-3xl ml-10">
                            <li class="mt-2"><i class="bi bi-record-fill text-sm mr-4 -mt-5"></i>Honestidad</li>
                            <li class="mt-2"><i class="bi bi-record-fill text-sm mr-4 -mt-5"></i>Compromiso</li>
                            <li class="mt-2"><i class="bi bi-record-fill text-sm mr-4 -mt-5"></i>Creatividad</li>
                            <li class="mt-2"><i class="bi bi-record-fill text-sm mr-4 -mt-5"></i>Servicio al cliente</li>
                            <li class="mt-2"><i class="bi bi-record-fill text-sm mr-4 -mt-5"></i>Trabajo en equipo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- maps --}}
    <section class="overflow-x-hidden">
        <div data-aos="fade-down-left" class="bg-white dark:bg-gray-800 w-full">
            <div class="relative overflow-hidden rounded-lg">
                <h3 class="text-center font-bold pb-20 text-4xl">Conoce las ubicaciones de nuestros Centros Comerciales.</h3>
                <div class="md:px-10">
                    <iframe class="w-full h-96" src="https://www.google.com/maps/d/u/0/embed?mid=1MzxK1T3Q2ZroOwE4a-vRpxqntBD6nVs&ehbc=2E312F&noprof=1"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Línea divisora -->
    <div class="border-2 border-gray-300 mb-8"></div>

    {{-- Fomulario y contacto --}}
    <section class="overflow-x-hidden">
        <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2">

            @include('form')

            <div class="border-gray-300 text-center mt-20 mb-10 my-auto">

                <div class="border-2 mx-40 mb-6 border-gray-300"></div>

                <i class="bi bi-whatsapp text-black-900 text-5xl font-bold"> Escríbenos</i>
                <p class="text-xl px-8 md:px-32 my-6">Ponte en contacto con nosotros por medio de nuestro WhatsApp</p>
                <p class="text-3xl text-lime-500 font-bold">558 017 3335</p>
            </div>
        </div>
    </section>

    {{-- boton flotante de WhatsApp --}}
    @include('whatsapp')

    <!-- Footer -->
    @include('footer')
</x-guest-layout>