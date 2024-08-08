<div class="flex justify-center items-center min-h-screen bg-pink-50">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
      <h1 class="text-3xl font-semibold mb-4 text-pink-600">MIA MOMI</h1>
      <h4 class="text-xl font-medium mb-4 text-pink-500">Shoes for Her</h4>
      <p class="mb-6 text-gray-700">Llene los campos de este formulario para enviar un pedido.</p>
      <form id="order-form" class="space-y-4" action="{{ route('orders.store') }}" method="POST">
          @csrf
          <div>
              <label for="full-name" class="block text-sm font-medium text-gray-600">Nombre completo</label>
              <input id="full-name" name="FullName" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="Email" class="block text-sm font-medium text-gray-600">Correo electrónico</label>
              <input id="Email" name="Email" type="email" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
              <div id="emailError" class="text-red-500 text-sm mt-1"></div>
          </div>
          <div>
              <label for="product-name" class="block text-sm font-medium text-gray-600">Nombre del producto</label>
              <input id="product-name" name="ProductName" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="attended-by" class="block text-sm font-medium text-gray-600">Atendió</label>
              <input id="attended-by" name="AttendedBy" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <div>
              <label for="phone-number" class="block text-sm font-medium text-gray-600">Número de teléfono</label>
              <input id="phone-number" name="PhoneNumber" type="tel" pattern="[0-9]{10}" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
              <div id="phoneError" class="text-red-500 text-sm mt-1"></div>
          </div>
          <div>
              <label for="address" class="block text-sm font-medium text-gray-600">Domicilio</label>
              <input id="address" name="Address" type="text" class="bg-gray-100 mt-1 block w-full border-pink-300 rounded-lg shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
          </div>
          <input type="hidden" name="Status" value="En Proceso">
          <div>
              <button type="submit" class="w-full bg-pink-600 text-white py-2 px-4 rounded-lg hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Enviar</button>
          </div>
      </form>
  </div>
</div>
