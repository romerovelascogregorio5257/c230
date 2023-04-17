<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>C230-Consultores</title>
        <link rel="stylesheet" href="/css/theme.css">
    </head>
    <body class="antialiased">

      <div class="nav">
        <input type="checkbox" id="nav-check">

        <div class="nav-header">
          <div class="nav-title">
            <img src="icons/C230_Logo_SinFondo.png" width="50px">
          </div>
        </div>

        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>

        <div class="nav-links">
          <a class="ff2">Quiénes somos <img src="icons/arrow.png" width="20px"> </a>
          <a class="ff2">Qué hacemos <img src="icons/arrow.png" width="20px"> </a>
          <a class="ff2">Proyectos destacados</a>
          <a class="ff2">Vacantes</a>
        </div>
      </div>

      @yield('content')

      <footer>
        <div class="footer-initial">

          <div class="footer-child-one">
              <div class="child-one-items">
                <div class="items-one-styles">
                  <img src="icons/location.png" width="15px" class="pl4">
                  <span class="fs6 fc3-bg ff5"> Nuestas oficinas</span>
                </div>
                <div class="items-one-styles">
                  <span class="fs6 fc3-bg ff5">Redes sociales</span>
                  <img src="icons/linkedin.png" width="15px" class="pl4">
                  <img src="icons/twitter.png" width="15px" class="pl4">
                </div>
              </div>
              <div class="items-two-styles">
                <p class="fs6 fc3-bg ff5">C230 Consultores no cobra ninguna cuota durante los procesos de reclutamiento, selección y contratación a los aspirantes.</p>
                <p class="fs6 fc3-bg ff5">C230 Consultores no realiza ningún cobro durante sus procesos de adquisiciones a sus proveedores.</p>
                <p class="fs6 ff5"><span class="fc3-bg">C230 Consultores mantiene una política de cero tolerancia con respecto a la trata de personas.</span> <a href="#" style="text-decoration:none;"> <span class="fc4-tb"> Descarga aquí nuestra política</span></a></p>
              </div>
          </div>

          <div class="footer-child-two">
            <img src="icons/9.png" class="img-responsive-footer">
          </div>

        </div>
      </footer>

    </body>
</html>
