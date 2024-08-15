<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="icon" href="{{ asset('images/miamomi.png') }}" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/miamomi.png') }}">
</head>

<style>
    ::-webkit-scrollbar {
      width: 1px;
    }
  </style>
  
  <div style="position: absolute; top:1rem; right:1rem;">
    <a class="text-black" href="/login">Login</a>
  </div>

<body>
    
    <!-- Store order from -->
    @include('components.order-form')

    <!-- Modal -->
    @include('components.modal', ['statusCode' => 201, 'header' => '¡Pedido Exitoso!'])

</body>
</html>
