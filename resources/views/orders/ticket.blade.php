<!-- resources/views/orders/ticket.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Orden</title>
    @vite('resources/css/ticket.css')
    @vite('resources/js/app.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grey+Qo&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

@php
    \Carbon\Carbon::setLocale('es');
@endphp

<body>
    
  <div class="ticket">
    <div class="header">

      <div class="left-header">
        <div class="logo">
          <img width="225px" src="{{ asset('images/miamomi-md.png') }}" alt="Logo">
          
        </div>
      </div>

      <div class="right-header">
        
        <div class="right-top-header flex-full-center">
          <span>Fecha</span><div style="width: 25px"></div><div class="fecha">{{ \Carbon\Carbon::parse($order->created_at)->translatedFormat('l, d \d\e F \d\e Y') }}
      
          </div>
        </div>

        <div class="right-bottom-header flex-full-center">

          <div class="social-media">
            <div class="icon">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="text">/momiimx</div>
          </div>
        
          <div class="social-media">
            <div class="icon">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="text">/MomiGdl</div>
          </div>
        
          <div class="social-media">
            <div class="icon">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div class="text">33 1410 9269</div>
          </div>
        
        </div>
      </div>

    </div>

    <div class="body">
  <div class="field">
    <div class="field-text">
      <pre><strong>Nombre del cliente:</strong> <span>{{ $order->FullName }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Correo:</strong> <span>{{ $order->Email }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Modelo del calzado:</strong> <span>{{ $order->ShoeModel }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Número del calzado:</strong><span>{{ $order->ShoeSize }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Atendió:</strong><span>{{ $order->AttendedBy }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Número de teléfono:</strong><span>{{ $order->PhoneNumber }}</span></pre> 
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Domicilio:</strong><span>{{$order->Address}}</span></pre>
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Tipo de envío:</strong><span>{{$order->OrderType}}</span></pre>
    </div>
  </div>
  <div class="field">
    <div class="field-text">
      <pre><strong>Horario de entrega:</strong></pre>
    </div>
  </div>
</div>

    <div class="footer flex-space-center">
      <div class="thanks kaushan-script-regular ">Gracias por su compra</div>
      <div class="total"><span>Total:</span></div>
      <div class="total-area"></div>
    </div>
  </div>

    <script>
        /*
        window.onload = function() {
            window.print();
        };
        */
    </script>
</body>
</html>
