<?php

use App\core\Controller;

class Cliente extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('cliente/index');
  }

}