<x-AppLayout>
    <div class="flex justify-center items-center h-screen">
        <form class="w-full max-w-md bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('contacto.enviarMensaje') }}">
          @csrf
      
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nombre">Nombre:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" type="text" placeholder="Nombre">
          </div>
      
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">Email:</label>
            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email">
          </div>
      
          <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-2" for="mensaje">Mensaje:</label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
          </div>
      
          <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Enviar
            </button>
          </div>
        </form>
      </div>
</x-AppLayout>