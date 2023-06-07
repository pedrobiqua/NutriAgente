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

}