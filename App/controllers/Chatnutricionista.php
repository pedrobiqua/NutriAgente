<?php

use App\core\Controller;

class Chatnutricionista extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('nutricionista/chatnutricionista');
  }

}
