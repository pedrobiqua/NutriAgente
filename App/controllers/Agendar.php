<?php

use App\core\Controller;

class Agendar extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('cliente/agendar');
  }

}