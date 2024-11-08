<div class="p-10 mx-auto my-auto">
    <h1 class="text-3xl font-bold text-center">Llena el formulario y comunícate con nosotros</h1>
    <form action="https://formsubmit.co/bernavigilw@gmail.com" method="POST" class="bg-white  max-w-lg space-y-4">
        <!-- Nombre -->
        <div>
            <label for="nombre" class="block text-gray-700 font-semibold">NOMBRE</label>
            <input type="text" id="nombre" name="nombre" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-none" required>
        </div>          
    
        <!-- Teléfono y Email -->
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-1">
            <label for="telefono" class="block text-gray-700 font-semibold">TELÉFONO</label>
            <input type="tel" id="telefono" name="telefono" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-noneg" required>
          </div>
          <div class="flex-1">
            <label for="email" class="block text-gray-700 font-semibold">CORREO</label>
            <input type="email" id="email" name="email" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-none" required>
          </div>
        </div>
    
        <!-- Ciudad y Estado -->
        <div class="flex flex-col md:flex-row gap-4">
          <div class="flex-1">
            <label for="ciudad" class="block text-gray-700 font-semibold">CIUDAD</label>
            <input type="text" id="ciudad" name="ciudad" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-none" required>
          </div>
          <div class="flex-1">
            <label for="estado" class="block text-gray-700 font-semibold">ESTADO</label>
            <input type="text" id="estado" name="estado" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-none" required>
          </div>
        </div>
    
        <!-- Mensaje -->
        <div>
          <label for="mensaje" class="block text-gray-700 font-semibold">MENSAJE</label>
          <textarea id="mensaje" name="mensaje" class="w-full border-2 p-2 rounded-lg focus:border-green-500 focus:outline-none" rows="4" required></textarea>
        </div>
    
        <!-- Botón de Enviar -->
        <div>
          <button type="submit" class="w-full border-2 hover:border-lime-500 hover:bg-white hover:text-black bg-lime-500  font-semibold py-2 rounded-lg transition duration-200">ENVIAR</button>
          <input type="hidden" name="_next" value="http://127.0.0.1:8000/gracias">
          <input type="hidden" name="_captcha" value="false">
        </div>
      </form>
</div>