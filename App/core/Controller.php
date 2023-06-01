<?php

namespace App\core;

use App\models\Users;

/**
* Descricao: Esta classe é responsável por instanciar um model e chamar a view correta
* passando os dados que serão usados.
*
* @author Pedro Bianchini de Quadros
* Data criacao: 30/05/2023
* Data atualizacao: 30/05/2023
* Atualizado por: Pedro Bianchini de Quadros
*/
class Controller
{

  /**
  * Descricao: Este método é responsável por chamar uma determinada view (página).
  *
  * @param  string  $model   É o model que será instanciado para usar em uma view, seja seus métodos ou atributos
  */
  public function model($model) {
    require '../App/models/' . $model . '.php';
    $classe = 'App\\models\\' . $model;
    return new $classe();

  }

  /**
  * Descricao: Este método é responsável por chamar uuma determinada view (página).
  *
  * @param  string  $view   A view que será chamada (ou requerida)
  * @param  array   $data   São os dados que serão exibido na view
  */
  public function view(string $view, $data = []) {
    require '../App/views/' . $view . '.php';

  }

  /**
  * Este método é herdado para todas as classes filhas que o chamaram quando
  * o método ou classe informada pelo usuário nçao forem encontrados.
  */
  public function pageNotFound() {
    $this->view('erro404');
  }
}