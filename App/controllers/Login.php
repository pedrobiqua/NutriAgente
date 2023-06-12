<?php

use App\core\Controller;

/**
 * Descricao: Classe controladora da tela de login
 * 
 * @author Gabriel Antonio Gomes de Farias
 * Data criacao: 07/06/2023
 * Data atualizacao: 
 * Atualizado por: 
 */
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