<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/config.css">
    <link href='https://fonts.googleapis.com/css?family=IBM Plex Sans Condensed' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet"> 
    <title>NutriAgente</title>
  </head>
  <body>

  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
      <li><a href="home" class="nav-link px-2 link-secondary"><img src="../Public/assets/img/logosemarco.png" width="135px" height="39px"></a></li>
      </div>



      <div class="col-md-3 text-end">
      <a href="login"><button type="button" class="btn btn-outline-primary botao me-2 verdeEscuro fonteDosis">Login</button></a>
        <button type="button" class="btn o me-2 verdeEscuro"></button>
        <button type="button" class="btn o me-2 verdeEscuro"></button>
      </div>
    </header>
  


  <?php
    require '../App/autoload.php';

    use App\core\App;
    use App\core\Controller;

    $app = new App();

    //echo $app

  ?>
    
  <footer class="fonteDosis">
    <ul class="nav justify-content-center border-bottom">
      <li class="nav-item"><a href="#" class="nav-link px-2 verdeEscuro">Facebook</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 verdeEscuro">Instagram</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 verdeEscuro">Twitter</a></li>
    </ul>
    <p class="text-center verdeEscuro">© 2023 NutriAgente</p>
  </footer>

    <!--<footer class="fonteDosis" width="24" height="12">

    <p class="col-md-4 mb-0">© 2023 NutriAgente</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
    </a>

    <ul class="nav col-md-4 justify-content-end icon-link">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Facebook</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Instagram</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Twitter</a></li>
    </ul>
  
  


      <p>NutriAgente 2023©</p>
      <a href="#" class="nav-link fonteDosis" style="display:inline">Facebook</a>
      <a href="#" class="nav-link fonteDosis" style="display:inline">Instagram</a>
      <a href="#" class="nav-link fonteDosis" style="display:inline">Twitter</a>
    </footer>-->
  </body>
</html>
