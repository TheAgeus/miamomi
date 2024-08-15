<div class="flex justify-center items-center min-h-screen bg-pink-50 ">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg mt-8">
      <div class="flex justify-center mb-2">
        <img src="{{ asset('images/miamomi-md.png') }}" alt="Logo" class="h-20 w-30">
      </div>
      <h4 class="flex justify-center text-xl font-medium mb-8 text-pink-500">Shoes for Her</h4>
      <p class="mb-6 text-gray-700">Llene los campos de este formulario para enviar un pedido.</p>
      <form id="order-form" class="space-y-4" action="{{ route('orders.store') }}" method="POST">
          @csrf
          <div>
              <label for="full-name" class="block text-sm font-medium text-gray-600">Nombre completo</label>
              <input required id="full-name" name="FullName" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="Email" class="block text-sm font-medium text-gray-600">Correo electrónico</label>
              <input required id="Email" name="Email" type="email" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
              <div id="emailError" class="text-red-500 text-sm mt-1"></div>
          </div>
          <div>
              <label for="shoe-model" class="block text-sm font-medium text-gray-600">Modelo del calzado</label>
              <input required id="shoe-model" name="ShoeModel" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
            <label for="product-size" class="block text-sm font-medium text-gray-600">Número del calzado</label>
            <input required id="shoe-size" name="ShoeSize" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="attended-by" class="block text-sm font-medium text-gray-600">Atendió</label>
              <input required id="attended-by" name="AttendedBy" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="phone-number" class="block text-sm font-medium text-gray-600">Número de teléfono (ej. 3321325354)</label>
              <input required id="phone-number" name="PhoneNumber" type="tel" pattern="[0-9]{10}" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
              <div id="phoneError" class="text-red-500 text-sm mt-1"></div>
          </div>
          <div>
              <label for="address" class="block text-sm font-medium text-gray-600">Domicilio</label>
              <input required id="address" name="Address" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
            <label for="address" class="block text-sm font-medium text-gray-600">Tipo de pedido</label>
            <select required name="OrderType" id="OrderType" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                <option value="Local">Local</option>
                <option value="Foraneo">Foraneo</option>
            </select>
          </div>
          <input type="hidden" name="Status" value="Registrada">
          <div>
              <button type="submit" class="w-full bg-pink-600 text-white py-2 px-4 rounded-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Enviar</button>
          </div>
      </form>
  </div>
</div>
