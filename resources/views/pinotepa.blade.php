<x-guest-layout>
        <!-- Header -->
    <header>
        @include('nav')

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
                {{-- texto y botones de fondo --}}
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="mt-40">
                        <h1 data-aos="zoom-in" class="text-white text-4xl font-bold -mt-40">Pinotepa</h1>
                    </div>
                    <div>
                        <h1 data-aos="zoom-in" class="text-3xl md:text-7xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-lg">
                            Tu Mejor Oportunidad de <br><strong id="changingText">Crecimiento</strong>
                        </h1>

                        {{-- Ejemplo para que el texto no se puerda en las imagenes de fondo --}}

                        {{-- <h1 class="text-3xl md:text-6xl font-bold mb-6 text-gray-50 transition duration-500 p-2 rounded-md text-shadow-wide bg-black bg-opacity-50">
                            Tu Mejor Oportunidad de <br><strong id="changingText">Crecimiento</strong>
                        </h1> --}}

                    </div>
                    <div data-aos="fade-up" class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">
                        <div class="flex items-center justify-center">
                            <a class="bg-lime-400 hover:bg-lime-200/50 text-white font-bold px-6 py-3 rounded-full text-center w-full flex items-center justify-center" href="#concepto">
                                !CONÓCENOS¡ <i class="bi bi-file-earmark-richtext-fill text-2xl ml-2"></i>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a class="bg-white hover:bg-white/20 font-bold px-6 py-3 rounded-full text-center w-full flex items-center justify-center" href="">
                                RENTAR UN LOCAL <i class="bi bi-building-fill-add text-2xl ml-2"></i>
                            </a>
                        </div>
                    </div>                    
                </div>                
            </div>
        </div>
    </header>

    <!-- Plazas comerciales, socios comerciales, visitas al mes -->
    <section class="overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 md:p-24 gap-4 mt-10 mb-10 mx-5">

            <div data-aos="fade-up-right" class="text-center grid grid-cols-2 gap-4">
                <div class="mt-4">
                    <img loading="lazy" src="/img/carrito.png" class="h-28 md:h-48 mx-auto">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl md:text-6xl font-bold">32</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Locales</p>
                </div>
            </div>

            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img loading="lazy" src="/img/estacionamiento.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold"><strong class="text-green-500">+</strong>352</h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">Cajones de estacionamiento</p>
                </div>
            </div>

            <div data-aos="fade-up-right" class="text-center grid grid-cols-2">
                <div>
                    <img loading="lazy" src="/img/areaconstruida.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center">
                    <h1 class="text-3xl md:text-6xl font-bold">9,438<strong class="text-green-500 text-base"> m2</strong></h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">De construcción</p>
                </div>
            </div>

            <div data-aos="fade-up-left" class="text-center grid grid-cols-2">
                <div>
                    <img loading="lazy" src="/img/escuadra.png" class="h-28 md:h-48">
                </div>
                <div class="flex flex-col justify-center text-center">
                    <h1 class="text-3xl md:text-6xl font-bold">32<strong class="text-green-500 text-base">mil m2</strong></h1>
                    <p class="text-xl md:text-3xl text-green-500 font-bold">De terreno</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Nuestro concepto --}}
    <section class="overflow-x-hidden" id="concepto">
        <div class="bg-gray-200 pt-10">
            <h1 data-aos="zoom-in-left" class="text-5xl text-center font-bold mb-20">NUESTRO CONCEPTO</h1>
            <div class="border-2 border-gray-300 mb-8 mx-20"></div>
            <p data-aos="zoom-in-right" class="px-5 mb-5 text-base md:text-3xl mt-20 text-center">
                Santiago Pinotepa Nacional, ubicada en la región Costa Chica, al suroeste de la ciudad capital de Oaxaca, es considerada un importante centro regional por su ubicación estratégica. Entre sus principales actividades económicas se distingue la agricultura y ganadería, ya que cuentan con tierras propias para el desarrollo de dichas actividades; la pesca por su cercanía con el mar, así como un importante comercio de bienes y servicios.            
            </p>
            <div class="text-center grid grid-cols-1 md:grid-cols-2 md:px-80">
                <div data-aos="zoom-in-right" class="my-10">
                    <i class="bi bi-arrow-down-square text-4xl"></i>
                    <p class="mt-10 text-2xl">Calidad de infraestructura</p>
                </div>
                <div data-aos="zoom-in-left" class="my-10">
                    <i class="bi bi-card-checklist text-4xl"></i>
                    <p class="mt-10 text-2xl">Variedad de servicios</p>                 
                </div>
            </div>
        </div>
    </section>

    {{-- Espacios interiores --}}
    <section class="overflow-x-hidden">
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
                    Plaza Las Flores Pinotepa es un centro comercial urbano, único desarrollo comercial de su tipo en la región Costa del Estado de Oaxaca, el cual atenderá las necesidades de consumo y entretenimiento de los visitantes por medio de sus tiendas de autoservicio, departamentales, salas de cine, zona gourmet y una amplia galería comercial. La zona de influencia abarca una población superior de los 350 mil habitantes que incluyen varios municipios.                
                </p>
            </div>
        </div>
    </section>

    {{-- Nuestros socios comerciales --}}
    <section class="overflow-x-hidden">
        <div class="relative pb-32 bg-gray-600/10 pt-24 bg-cover bg-center bg-fixed" style="background-image: url(/fondos_prueba/fondo-pinotepa.jpeg);">
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
        <div id="seccion-destino" class="grid grid-cols-1 md:grid-cols-2">
            {{-- Acordion de lista de locales --}}
            <div data-aos="fade-up" class="max-w-2xl my-auto">
                {{-- Acordion alimentos --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Alimentos
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                            @if($local->categoria == 'alimentos')
                                <ul class="text-lg mb-2">
                                    <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                </ul>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Autoservicios --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Autoservicios
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'autoservicio')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion autos --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Autos
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'autos')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Ropa, Calzado y accesorios --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Ropa, Calzado y accesorios
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'ropa, calzado y accesorios')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Hogar --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Hogar
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'hogar')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Tecnologia --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Tecnologia
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'tecnologia')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Servicios --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Servicios
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'servicios')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion Entretenimientos --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Entretenimientos
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'entretenimiento')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Acordion locales disponibles --}}
                <div class="accordion">
                    <div class="contentbx">
                        <div class="label">
                            Locales disponibles
                        </div>
                        <div class="content md:ml-8 ml-20">
                            @foreach ($locales as $local)
                                @if($local->categoria == 'locales disponibles')
                                    <ul class="text-lg mb-2">
                                        <li class="ml-10"><i class="bi bi-record-fill text-sm mr-2"></i><strong class="mr-2">{{$local->nombre}}</strong>{{$local->local}}</li>
                                    </ul>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="mx-auto my-auto">
                <img loading="lazy" src="/plano/F_LasFlores-Planta Pinotepa.jpg" width="700px">
            </div>
        </div>
    </section>

    {{-- Invierte con nosotros --}}
    <section class="overflow-x-hidden font-principal">
        <div data-aos="zoom-in-down" class="text-center grid grid-cols-1 md:grid-cols-2 space-x-4 gap-8 items-center container mb-20 mt-20">
            <div>
                <img loading="lazy" src="/img/BASE.png" alt="Imagen de ejemplo" class="w-full h-auto rounded-lg shadow">
            </div>
            <div class="">
                <h1 class="text-6xl font-bold text-gray-800 mb-10">Haz crecer tu negocio</h1>
                <p class="text-gray-600 text-4xl mb-10">Renta un local</p>
                <a href="#seccion-destino" class="bg-lime-500 hover:bg-green-700 hover:text-white text-black rounded-full px-4 py-3">VER LOCALES </a>
            </div>
        </div>
    </section>

    {{-- Fomulario y contacto --}}
    <section class="bg-gray-200 overflow-x-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2">

            <div class="p-10">
                <h1 class="text-3xl font-bold text-center">Para mas información contáctanos</h1>
                <form class="max-w-md mx-auto">
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-200 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nombre y apellido</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-200 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Correo electrónico</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-200 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Teléfono</label>
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-2 border-lime-500 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-lg text-gray-900 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-200 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Mensaje</label>
                    </div>
                    <button type="submit" class="mt-5 text-white font-bold bg-lime-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">ENVIAR</button>
                </form>
            </div>

            <div data-aos="fade-left" class="md:mr-10">
                <div class="relative overflow-hidden rounded-lg  mt-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15313.82402635256!2d-98.066927!3d16.350717!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85b7e195dd82f525%3A0x8b73f0bbca7aca22!2sPlaza%20Las%20Flores%20Pinotepa!5e0!3m2!1ses-419!2sus!4v1725933594181!5m2!1ses-419!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mx-4 mt-3">
                    <p class="text-sm md:text-lg font-bold mb-4"> <i class="bi bi-geo-alt-fill mr-4 text-xl md:text-2xl"></i> Pinotepa - Dirección PLF Pinotepa | Aviacion, 71605 Santiago Pinotepa Nacional, Oax. </p>
                    <p class="text-sm md:text-lg font-bold mb-4"> <i class="bi bi-envelope-fill mr-4 text-xl md:text-2xl"></i> info@plazalasflores.com.mx</p>
                    <p class="text-sm md:text-lg font-bold mb-4"> <i class="bi bi-whatsapp mr-4 text-xl md:text-2xl"></i> 558 017 33 35</p>    
                </div>
            </div>
        </div>
    </section>

    {{-- boton flotante de WhatsApp --}}
    @include('whatsapp')

    <!-- Footer -->
    @include('footer')   
</x-guest-layout>