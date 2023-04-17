<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    </head>
    <body class="antialiased">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Mi Sitio Web</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="#">Inicio</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Acerca de</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Contacto</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

      <?php echo $__env->yieldContent('content'); ?>


    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/c230-3.0/resources/views/layouts/menu.blade.php ENDPATH**/ ?>