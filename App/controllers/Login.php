<?php

use App\core\Controller;

class Login extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('login/index');
  }

  /*
  * Loga no sistema
  */
  public function iniciarSessao(string $userLogin,string $password)
  {
    $User = $this->model('Logins');
    $data = $User::findUser($userLogin, $password);

    if( isset($data) and !empty($data)) {
      return array("tipo" => $data[0]['tipo_conta'], "resultado" => true);
    } else {
      return array("tipo" => null, "resultado" => false);
    }
  }

}