<!-- Estructura HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Redireccionando...</title>
    <meta http-equiv="refresh" content="5;url=public/pages/empleados.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">

    <!-- Script para redireccionar -->
    <script>
        setTimeout(function() {
            window.location.href = 'public/pages/empleados.html';
        }, 5000); // Redireccionar después de 5 segundos
    </script>
</head>
<body>

  <!-- Estructura -->
  <div class="App">
      <header class="App-header">
        <h1>BIENVENIDO A</h1>
        <div class='cont-logo'>
          <div class='circule-1 circule'></div>
          <div class='circule-2 circule'></div>
          <div class='circule-3 circule'></div>
          <div class='circule-4 circule'></div>
          <div class='circule-5 circule'></div>
          <div class='circule-6 circule'></div>
          <div class='circule-7 circule'></div>
          <div class='circule-8 circule'></div>
          <div class='circule-9 circule'></div>
          <div class='circule-10 circule'></div>
          <div class='circule-11 circule'></div>
          <div class='circule-12 circule'></div>
          <div class='circule-13 circule'></div>
          <div class='circule-14 circule'></div>
          <div class='circule-15 circule'></div>
          <div class='logo'>
            <img src="public/img/logo.jpg" class="App-logo" alt="logo" />
          </div>
        </div>
        <p>Si no eres redirigido automáticamente despues de 5 seg, haz clic <a href="public/pages/empleados.html" class="App-link">aquí</a></p>
      </header>
    </div>
</body>
  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
