<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Dashboard</title>

</head>
<body class="bg-pink-50">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-white p-4 shadow-md border-b border-pink-200">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold text-pink-600 hover:text-pink-700 transition-colors duration-300">MIA MOMI</a>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-pink-600 hover:text-pink-700 transition-colors duration-300">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
        <main class="flex-grow w-full">
            <div class="container mx-auto flex flex-col items-center p-6 max-w-7xl">
                @yield('content')
            </div>
            @yield('scripts')
        </main>
    </div>
</body>
</html>
