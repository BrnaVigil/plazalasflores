<x-guest-layout>
        <!-- Header -->
    <header>
        <nav id="navbar" class="bg-green-pf fixed w-full z-50">
            <div class="container mx-auto flex items-center justify-between">
                <!-- Logo -->
                <div class="logo my-2">
                    <a href="/" class="flex items-center">
                        <img class="h-20" src="/img/logo-1.png" >
                        <img src="/img/via_plaza.png" alt="Logo" class="h-16 ml-10">
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
                <ul id="menu" class="menu flex flex-col md:flex-row md:items-center md:space-x-6 text-white font-normal">
                    <!-- Elementos de menú visibles solo en pantallas medianas y grandes -->
                    <li class="hidden md:block"><a href="/" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Inicio</a></li>
                    <li class="hidden md:block"><a href="/comitan" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Comitán</a></li>
                    <li class="hidden md:block"><a href="/tonala" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Tonalá</a></li>
                    <li class="hidden md:block"><a href="/villaflores" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Villaflores</a></li>
                    <li class="hidden md:block"><a href="/pinotepa" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Pinotepa</a></li>
                    <li class="hidden md:block"><a href="/ciudadhidalgo" class="block py-2 md:py-0 hover:text-gray-300 font-extrabold underline">Ciudad Hidalgo</a></li>
                    <li class="hidden md:block"><a href="/palenque" class="block py-2 md:py-0 hover:text-gray-300 hover:underline">Palenque</a></li>
                    <li class="hidden md:block"><a id="facebook-link" href="#" class="block py-2 md:py-0 hover:text-gray-300 ml-32"><i class="bi bi-facebook text-3xl hover:text-blue-800"></i></a></li>
                    <li class="hidden md:block"><a id="instagram-link" href="#" class="block py-2 md:py-0 hover:text-gray-300"><i class="bi bi-instagram text-3xl hover:text-pink-800"></i></a></li>
                    
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
            <div class="slider-cont-fondo w-full">
                <div class="slider-fondo h-full" id="slider-fondo">
                    @foreach ($fondos as $fondo)
                        <div class="slide-fondo">
                            <img loading="lazy" class="w-full h-screen object-cover" src="{{ asset('storage/'.$fondo->img) }}" alt="Image 2">
                        </div>
                    @endforeach
                </div>
                <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Fondo gris transparente -->
                {{-- texto y botones de fondo --}}
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="text-center">
                        <h1 data-aos="zoom-in" class="text-3xl md:text-7xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-lg">
                            <br><strong id="changingText-tonala-vf">Haz crecer tu dinero</strong>
                        </h1>
                        {{-- Ejemplo para que el texto no se puerda en las imagenes de fondo --}}

                        {{-- <h1 class="text-3xl md:text-6xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-wide bg-black bg-opacity-50">
                            Tu Mejor Oportunidad de <br><strong id="changingText">Crecimiento</strong>
                        </h1> --}}
                    </div>  
                </div>                
            </div>
        </div>
    </header>

    <!-- Plazas comerciales, socios comerciales, visitas al mes -->
    <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-3 md:p-24 gap-4 mt-10 mb-10">

            <div data-aos="fade-up-right" class="text-center grid grid-cols-2 gap-4">
                <div>
                    <img loading="lazy" src="/img/carrito.png" class="h-28 md:h-28 mx-auto">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-4xl md:text-4xl font-bold"><strong class="text-green-custon">+</strong>25</h1>
                    <p class="text-xl md:text-2xl text-green-custon font-bold">Locales Comerciales</p>
                </div>
            </div>

            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img loading="lazy" src="/img/estacionamiento.png" class="h-28 md:h-28">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-3xl md:text-5xl font-bold"><strong class="text-green-custon">+</strong>190</h1>
                    <p class="text-xl md:text-2xl text-green-custon font-bold">Cajones de Estacionamiento</p>
                </div>
            </div>

            <div data-aos="fade-up-right" class="text-center grid grid-cols-2">
                <div>
                    <img loading="lazy" src="/img/areaconstruida.png" class="h-28 md:h-28">
                </div>
                <div class="flex flex-col">
                    <h1 class="text-3xl md:text-4xl font-bold"><strong class="text-green-custon">+</strong>14 mil<strong class="text-green-custon text-base"> m2</strong></h1>
                    <p class="text-xl md:text-2xl text-green-custon font-bold">Rentables</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Nuestro concepto --}}
    <section class="overflow-x-hidden" id="concepto">
        <div class="bg-gray-200 pt-20">
            <h1 class="text-5xl text-center font-bold mb-20">NUESTRO CONCEPTO</h1>
            <div class="border-2 border-gray-300 mb-8 mx-20"></div>

            <p data-aos="zoom-in-right" class="px-5 mb-5 text-base md:text-3xl mt-20 text-center">
                Ciudad Hidalgo es la cabecera municipal de Suchiate, situada en el margen del río del mismo nombre entre México y Guatemala, es considerado el paso fronterizo del sur más importante del país que conecta a México con Centroamérica.
            </p>

            <p data-aos="zoom-in-right" class="px-5 mb-5 text-base md:text-3xl mt-20 text-center">
                Nuestro centro comercial en ésta ciudad es abierto, cuenta con 27 locales comerciales contando con Cinépolis, Bodega Aurrerá y Coppel como anclas, generando un tráfico sin duda muy importante en las instalaciones de este proyecto.
            </p>

            <div class="text-center grid grid-cols-1 md:grid-cols-2 md:px-80">
                <div data-aos="zoom-in-left" class="my-10">
                    <img class="h-20 mx-auto" src="/img/Calidad Infraestructura.png" alt="">                    
                    <p class="mt-10 text-2xl">Calidad de infraestructura</p>
                </div>
                <div data-aos="zoom-in-right" class="my-10">
                    <img class="h-20 mx-auto" src="/img/Servicios.png" alt="">
                    <p class="mt-10 text-2xl">Variedad de servicios</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Espacios interiores --}}
    {{-- <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 p-10 pb-28">
            
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

            <div data-aos="fade-left" class="relative bg-white border-2 border-gray-300 rounded-md shadow-lg p-6 md:top-20 md:-left-20 -left-10 -top-24">
                <h1 class="text-5xl font-bold text-center">ESPACIOS INTERIORES</h1>
                <p class="text-base md:text-2xl mt-4 md:px-4">
                    Es nuestro primer centro comercial abierto, y cuenta con 27 locales comerciales que en poco tiempo han logrado una mezcla muy atractiva para nuestros invitados. Contamos con 14,573 m2 rentables. 
                </p>
            </div>
        </div>

    </section> --}}

    {{-- Nuestros socios comerciales --}}
    <section class="overflow-x-hidden">
        <div class="relative pb-32 bg-gray-600/10 pt-24 bg-cover bg-center bg-fixed" style="background-image: url(/fondos_prueba/fondo-viaplaza.jpeg);">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <h1 data-aos="zoom-in" class="relative z-10 text-5xl md:text-6xl font-bold text-white text-center">Nuestros socios<strong class="text-lime-400"> comerciales</strong></h1>
        </div>
    
        {{-- slider de derecha a izquierda --}}
        <div class="slider-container w-full mt-16">
            <!-- Slider hacia la izquierda -->
            <div class="slider flex" style="animation-name: slideToLeft;">
                @foreach ($socios as $socio)
                    <img loading="lazy" src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                @endforeach
                
                <!-- Repetición de los logos para el efecto de bucle infinito -->
                @foreach ($socios as $socio)
                    <img loading="lazy" src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                @endforeach
            </div>
        </div>

        {{-- slider de izquierda a derecha --}}
        <div class="slider-container mt-2">
            <div class="slider-left flex">
                @foreach ($socios as $socio)
                    <img loading="lazy" src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                @endforeach
                
                <!-- Repetición de los logos para el efecto de bucle infinito -->
                @foreach ($socios as $socio)
                    <img loading="lazy" src="{{ asset('storage/'.$socio->img) }}" class="mx-5">
                @endforeach
            </div>
        </div>
    </section>

    {{-- acordion y imagen --}}
    <section class="mt-5 overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">
            {{-- Acordion de lista de locales --}}
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="my-auto mx-8 mt-4">
    
                {{-- Acordion alimentos --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-egg-fried mr-4"></i>Alimentos
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'alimentos')
                                    <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion Autoservicios --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-cart-fill mr-4"></i>Autoservicios
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'autoservicio')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion autos --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-car-front-fill mr-4"></i>Autos y motos
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'autos y motos')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion Moda --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-bag-fill mr-4"></i>Moda
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'moda')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion Tecnologia --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-phone-fill mr-4"></i>Tecnología
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'tecnologia')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion Entretenimientos --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-phone-fill mr-4"></i>Entretenimiento
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'entretenimiento')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Salud y belleza --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-heart-pulse-fill mr-4"></i>Salud y belleza
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'salud y belleza')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Departamental --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-shop mr-4"></i>Departamental
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'departamental')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Otros --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-box mr-4"></i>Otros
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'otros')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
    
                {{-- Acordion Locales dispinibles --}}
                <div class="accordion border-b border-gray-500">
                    <div class="contentbx">
                        <div class="label">
                            <i class="bi bi-pin-map-fill mr-4"></i>Locales disponibles
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'locales disponibles')
                                <p><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</p>                            
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            
            <div id="zoomimage" class="mt-5 mx-auto my-auto" data-aos="fade-left">
                <img id="zoomimg" src="/plano/F_NO_LasFlores-Planta CdHidalgo-02.jpg" alt="Imagen para zoom" style="width: 500px">
            </div>
        </div>
        <div>

        </div>
    </section>

    {{-- Invierte con nosotros --}}
    <section class="bg-gray-200 overflow-x-hidden font-principal">
        <div data-aos="zoom-in-down" class="text-center grid grid-cols-1 md:grid-cols-2 space-x-4 gap-8 items-center container mb-20 mt-20">
            <div>
                <img loading="lazy" src="/img/base-2.jpg" alt="Imagen de ejemplo" class="w-full h-auto rounded-lg shadow">
            </div>
            <div class="">
                <h1 class="text-6xl font-bold text-gray-800 mb-10">Haz crecer tu negocio</h1>
                <p class="text-gray-600 text-4xl mb-10">Renta un local</p>
                <a href="#seccion-destino" class="bg-lime-500 hover:bg-green-700 hover:text-white text-black rounded-full px-4 py-3">VER LOCALES </a>
            </div>
        </div>
    </section>

    {{-- Fomulario y contacto --}}
    <section class="bg-white overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">

            @include('form')

            <div data-aos="fade-left" class="md:mr-10">
                <div class="relative overflow-hidden rounded-lg p-4">
                    <iframe class="w-full h-96" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1929.8509905621925!2d-92.1552722!3d14.6728467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858e152de3a8e78f%3A0x5828b3af0b6db423!2sV%C3%ADa%20Plaza%20Cd%20Hidalgo.!5e0!3m2!1ses-419!2smx!4v1727549159460!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="text-lg font-bold mb-4"> <i class="bi bi-geo-alt-fill mr-4 text-2xl"></i>Via Plaza - Carretera Jaritas 777, Los Cerritos, 30840 Cdad. Hidalgo, Chis</p>
                <p class="text-lg font-bold mb-4"> <i class="bi bi-envelope-fill mr-4 text-2xl"></i> info@plazalasflores.com.mx</p>
                <p class="text-lg font-bold mb-4"> <i class="bi bi-whatsapp mr-4 text-2xl"></i> 558 017 33 35</p>
            </div>

        </div>
    </section>

    {{-- boton flotante de WhatsApp --}}
    @include('whatsapp')

    <!-- Footer -->
    @include('footer')
</x-guest-layout>