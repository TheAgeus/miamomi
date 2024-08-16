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
<body>
    
  <div class="ticket">
    <div class="header">

      <div class="left-header">
        <div class="logo">
          <img width="225px" src="{{ asset('images/miamomi-md.png') }}" alt="Logo">
          
        </div>
      </div>

      <div class="right-header">
        
        <div class="right-top-header flex-full-center">Fecha _ _ _ _ _ _ _ _ _ _ _ _ _ _</div>

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
    <div class="field-text">Nombre del cliente: <span class="field-value">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </span></div>
  </div>
  <div class="field">
    <div class="field-text">Domicilio: <span class="field-value">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </span></div>
  </div>
  <div class="field">
    <div class="field-text">Horario de entrega: <span class="field-value">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ </span></div>
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
