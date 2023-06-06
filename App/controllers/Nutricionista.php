<?php

use App\core\Controller;

/**
 * Descricao: Classe controladora da tela principal de entrada
 * 
 * @author Pedro Bianchini de Quadros
 * Data criacao: 06/06/2023
 * Data atualizacao: 30/05/2023
 * Atualizado por: Pedro Bianchini de Quadros 
 */
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