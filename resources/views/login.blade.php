<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50">
    <header class="bg-pink-600 text-white py-4 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">MIA MOMI SYSTEM</h1>
        </div>
    </header>
    <div class="flex justify-center items-center min-h-screen bg-pink-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold mb-4 text-pink-600">Login</h2>
            <form id="login-form" method="POST" action="/login">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                    <input id="email" name="email" type="email" class="mt-1 block w-full bg-gray-100 border-pink-300 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input id="password" name="password" type="password" class="mt-1 block w-full bg-gray-100 rounded-md shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-pink-600 text-white py-2 px-4 rounded-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
