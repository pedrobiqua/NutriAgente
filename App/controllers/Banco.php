<?php

use App\core\Controller;

/**
 * Descricao: Classe controladora da tela principal de entrada
 * 
 * @author Lukas Jacon Barboza
 * Data criacao: 30/05/2023
 * Data atualizacao: 08/06/2023
 * Atualizado por: Lukas Jacon Barboza
 */
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