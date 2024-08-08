<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white p-4 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-gray-800">Dashboard</a>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-800">Logout </button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="flex-grow container p-4 min-w-full max-w-7xl">
            @yield('content')
        </main>
    </div>
</body>
</html>
