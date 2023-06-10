<?php

use App\core\Controller;

/**
 * Descricao: Classe controladora da tela de login
 * 
 * @author Pedro Bianchini de Quadros
 * Data criacao: 07/06/2023
 * Data atualizacao: 
 * Atualizado por: 
 */
class Pacientes extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $Pacientes = $this->model('GerenciamentoPacientes');
    $data = $Pacientes::encontrarTodosPacientes(NULL);
    $this->view('pacientes/index', ['pacientes' => $data]);
  }

  /**
   * Classe responsável por gerenciar as opções de cada paciente
   */
  public function pacienteOptions(){
    if (isset($_POST['visualizar'])) {
      // Mostrar as informações do paciente
      echo "Entrou no visualizar";

    } else if (isset($_POST['remover'])) {
      // Remover o paciente
      $id = $_POST['id'];

      $Pacientes = $this->model('GerenciamentoPacientes');
      $Pacientes::removerPaciente($id);

    } else if(isset($_POST['adicionar'])){
      // Adicionar o paciente
      echo "Entrou no adicionar";
    }

    header('Location: /NutriAgente/Public/pacientes');
  }

}