<x-guest-layout>
    
    <!-- Header -->
    <header>
        @include('nav')
    
        {{-- imagen de fondo --}}
        <div class="flex items-center">
            <div class="slider-cont-fondo w-full">
                <div class="slider-fondo h-full" id="slider-fondo">
                    @foreach ($inicio as $index)
                        <div class="slide-fondo">
                            <img loading="lazy" class="w-full h-screen object-cover" src="{{ asset('storage/'.$index->imagen) }}" alt="Image 2">
                        </div>
                    @endforeach
                </div>
                {{-- texto y botones de fondo --}}
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="mt-40">
                        <h1 data-aos="zoom-in" class="text-white text-4xl font-bold -mt-40">Plaza las flores</h1>
                    </div>
                    <div>
                        <h1 data-aos="zoom-in" class="text-3xl md:text-7xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-lg">
                            Tu Mejor Oportunidad de <br><strong id="changingText">Crecimiento</strong>
                        </h1>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="1000" class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <div class="flex items-center justify-center">
                            <a class="bg-lime-400 hover:bg-lime-200/50 text-white font-bold px-6 py-3 rounded-full text-center w-full flex items-center justify-center" href="">
                                MAS INFORMES <i class="bi bi-file-earmark-richtext-fill text-2xl ml-2"></i>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a class="bg-white hover:bg-black font-bold px-6 py-3 rounded-full text-center w-full flex items-center justify-center" href="">
                                RENTAR UN LOCAL <i class="bi bi-building-fill-add text-2xl ml-2"></i>
                            </a>
                        </div>
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
                    <img src="/img/carrito.png" class="h-28 md:h-48 mx-auto">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl md:text-6xl font-bold">6</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Plazas comerciales</p>
                </div>
            </div>        
            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/saludo.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-500">+</strong>130</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Socios comerciales</p>
                </div>
            </div>
            <div data-aos="fade-up-right" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/caminando.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-500">+</strong>500 mil</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Visitas al mes</p>
                </div>
            </div>
            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img src="/img/escuadra.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center text-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-500">+</strong>166 mil</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Metros cuadrados</p>
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
                <p class="md:text-2xl text-base leading-relaxed font-bold">
                    Los espacios interiores fueron creados para proponer una larga estadía del invitado. El concepto de centro comercial cerrado y climatizado, en el que se puede gozar de un ambiente agradable mientras se visitan los autoservicios, cines, tiendas departamentales y una amplia variedad de restaurantes en el área gourmet.
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
        <div class="grid grid-cols-1 md:grid-cols-2 md:p-10 gap-4 my-10" style="background-image: url(/img/fondo-colores.jpg)">
            <div>
                <div>
                    <p data-aos="zoom-in" class="text-center text-white font-bold text-5xl md:text-6xl mt-12">SE PARTE DE NOSOTROS</p>
                </div>
            </div>
            <div>
                <div data-aos="zoom-out" class="py-10 md:p-20 text-center">
                    <a href="#" class="bg-lime-500 hover:bg-green-700 text-black font-bold rounded-full px-4 py-2 mx-auto text-center">
                        Contactanos <i class="bi bi-telephone-forward-fill ml-4"></i>
                    </a>
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
                        <p class="text-center font-medium text-xl md:text-2xl mt-4">" Ser un espacio de encuentro para la comunidad, que brinde las mejores opciones de compras, servicios y entretenimiento, a través de instalaciones cómodas, limpias y seguras. "</p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up-left">
                <div class="mt-10">
                    <img src="/img/vision.png" class="h-28 md:h-16 mx-auto">
                    <div>
                        <h1 class="text-center font-bold text-3xl">Visión</h1>
                        <p class="text-center font-medium text-xl md:text-2xl mt-4">" Consolidarnos como el principal destino comercial de la comunidad con la participación de las mejores marcas nacionales e internacionales, generando valor a nuestros socios comerciales. "</p>
                    </div>                
                </div>
            </div>

            <div data-aos="fade-down">
                <div class="mt-10">
                    <img src="/img/valores.png" class="h-28 md:h-16 mx-auto">
                    <div>
                        <p class="text-center font-bold text-2xl md:text-3xl mt-4">Valores</p>
                        <ul class="font-medium text-xl md:text-3xl ml-10">
                            <li class="mt-2"><i class="bi bi-check-circle-fill text-green-700 mr-4"></i>Honestidad</li>
                            <li class="mt-2"><i class="bi bi-check-circle-fill text-green-700 mr-4"></i>Compromiso</li>
                            <li class="mt-2"><i class="bi bi-check-circle-fill text-green-700 mr-4"></i>Creatividad</li>
                            <li class="mt-2"><i class="bi bi-check-circle-fill text-green-700 mr-4"></i>Servicio al cliente</li>
                            <li class="mt-2"><i class="bi bi-check-circle-fill text-green-700 mr-4"></i>Trabajo en equipo</li>
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
                <h3 class="text-center font-bold pb-20 text-4xl">Conoce las ubicaciones de nuestras Plazas Comerciales</h3>
                <iframe class="w-full md:px-32 h-96" src="https://www.google.com/maps/d/u/0/embed?mid=1QUOqiXy1oeobApyGzAxT5VWJB8-26ZY&ehbc=2E312F&noprof=1"></iframe>
            </div>
        </div>
    </section>

    <!-- Línea divisora -->
    <div class="border-2 border-gray-300 mb-8"></div>

    {{-- Fomulario y contacto --}}
    <section class="overflow-x-hidden">
        <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 ">

            <div class="p-10">
                <h1 class="text-3xl font-bold text-center">Para mas información contáctanos</h1>
                <form class="max-w-md mx-auto">
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre y apellido</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo electrónico</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Teléfono</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Mensaje</label>
                    </div>
                    <button type="submit" class="mt-5 text-white font-bold bg-lime-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">ENVIAR</button>
                </form>
            </div>

            <div class="border-gray-300 text-center mt-20 mb-10">
                <p class="text-xl px-7 md:px-32 my-6">Envíanos un correo electrónico con tus datos a la siguiente dirección:</p>
                <p class="text-2xl text-lime-500 font-bold mb-4">info@plazalasflores.com.mx</p>

                <div class="border-2 mx-40 mb-6 border-gray-300"></div>

                <i class="bi bi-whatsapp text-black-900 text-5xl font-bold"> Escribenos</i>
                <p class="text-xl px-8 md:px-32 my-6">Ponte en contacto con nosotros por medio de nuestro WhatsApp</p>
                <p class="text-3xl text-lime-500 font-bold">558 017 33 35</p>
            </div>
        </div>
    </section>

    {{-- boton flotante de WhatsApp --}}
    @include('whatsapp')

    <!-- Footer -->
    @include('footer')
</x-guest-layout>