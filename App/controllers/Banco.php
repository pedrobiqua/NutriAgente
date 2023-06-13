<?php

use App\core\Controller;

class Banco extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('banco/index');
  }

}