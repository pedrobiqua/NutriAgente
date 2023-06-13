<?php

use App\core\Controller;

class Nutricionista extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('nutricionista/index');
  }

}