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
    
    <!-- Store order from -->
    @include('components.order-form')

    <!-- Modal -->
    @include('components.modal', ['statusCode' => 201, 'header' => '¡Pedido Exitoso!'])

</body>
</html>
