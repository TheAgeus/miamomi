<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-4">MIA MOMI</h1>
            <h4 class="text-lg font-semibold mb-4">Shoes for her</h4>
            <p class="mb-6">Llene los campos de este formulario para enviar un pedido.</p>
            <form id="order-form" class="space-y-4" action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div>
                    <label for="full-name" class="block text-sm font-medium text-gray-700">Nombre completo</label>
                    <input id="full-name" name="FullName" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="Email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input id="Email" name="Email" type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <div id="emailError" class="text-red-500 text-sm mt-1"></div>
                </div>
                <div>
                    <label for="product-name" class="block text-sm font-medium text-gray-700">Nombre del producto</label>
                    <input id="product-name" name="ProductName" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="attended-by" class="block text-sm font-medium text-gray-700">Atendió</label>
                    <input id="attended-by" name="AttendedBy" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="phone-number" class="block text-sm font-medium text-gray-700">Número de teléfono</label>
                    <input id="phone-number" name="PhoneNumber" type="tel" pattern="[0-9]{10}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <div id="phoneError" class="text-red-500 text-sm mt-1"></div>
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Domicilio</label>
                    <input id="address" name="Address" type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <input type="hidden" name="Status" value="En Proceso">
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    @include('components.modal', ['statusCode' => 201, 'header' => '¡Pedido Exitoso!'])
</body>
</html>
