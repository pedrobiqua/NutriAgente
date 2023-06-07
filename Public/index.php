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
  <div class="container">
    <div class="corFundo">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home" class="nav-link px-2 link-secondary"><img src="../Public/assets/img/logosemarco.png" width="100" height="100"></a></li>
        </ul>

        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="login" class="nav-link fonteDosis" style="color: #00bf63;">
                  <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                  Login
                </a>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  
  <?php
    require '../App/autoload.php';

    use App\core\App;
    use App\core\Controller;

    $app = new App();

    //echo $app

  ?>
    
  <footer class="fonteDosis">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
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
