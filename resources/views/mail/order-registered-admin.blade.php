<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            margin: 20px 0;
        }
        .order-details {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
        }
        .order-details h3 {
            margin-top: 0;
        }
        .footer {
            text-align: center;
            color: #888888;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
    <title>Nueva Orden Registrada</title>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Nueva Orden Registrada</h1>
        </div>

        <div class="content">
            <p>Hola,</p>
            <p>Se ha registrado una nueva orden con los siguientes detalles:</p>
            <div class="order-details">
              <h2>Detalles de la Orden:</h2>
              <h3>Shoe Model: {{ $order->ShoeModel }}</h3>
              <p><strong>Order ID:</strong> {{ $order->id }}</p>
              <p><strong>Shoe Size:</strong> {{ $order->ShoeSize }}</p>
              <p><strong>Full Name:</strong> {{ $order->FullName }}</p>
              <p><strong>Email:</strong> {{ $order->Email }}</p>
              <p><strong>Attended By:</strong> {{ $order->AttendedBy }}</p>
              <p><strong>Phone Number:</strong> {{ $order->PhoneNumber }}</p>
              <p><strong>Address:</strong> {{ $order->Address }}</p>
              <p><strong>OrderType:</strong> {{ $order->OrderType }}</p>
              <p><strong>Status:</strong> <span id="status-{{ $order->id }}">{{ $order->Status }}</span></p>
              <p><strong>Created Date:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
            </div>
        </div>

        <div class="footer">
            <p>Gracias por usar nuestro servicio.</p>
            <p>Miamomi - digitalrelmex.com</p>
        </div>
    </div>
</body>
</html>
