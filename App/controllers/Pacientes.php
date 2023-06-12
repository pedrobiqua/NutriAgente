<?php

use App\core\Controller;
use App\models\GerenciamentoPacientes;
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
    
    if (isset($_POST['remover'])) {
      // Remover o paciente
      $id = $_POST['id'];

      $Pacientes = $this->model('GerenciamentoPacientes');
      $Pacientes::removerPaciente($id);

    } else if(isset($_POST['adicionar'])){

      $nutricionista_id = $_POST['nutricionista_id'];
      $nome = $_POST['nome_busca'];
      $objetivo = $_POST['objetivo'];
      $peso = $_POST['peso'];
      $altura = $_POST['altura'];
      $data_inicial = $_POST['data_inicial'];
      $data_final = $_POST['data_final'];

      $Pacientes = $this->model('GerenciamentoPacientes');
      $data = $Pacientes::adicionarPaciente($nutricionista_id, $nome, $objetivo, $peso, $altura, $data_inicial, $data_final);

      if ($data) {
        echo "Paciente adicionado com sucesso";
      } else {
        echo "Erro ao adicionar paciente";
      }

    } else if(isset($_POST['editar'])){

      $objetivo = $_POST['objetivo'];
      $peso = $_POST['peso'];
      $altura = $_POST['altura'];
      $data_inicial = $_POST['data_inicial'];
      $data_final = $_POST['data_final'];
      $nome = $_POST['nome'];

      $Pacientes = $this->model('GerenciamentoPacientes');
      $data = $Pacientes::editarPaciente($objetivo, $peso, $altura, $data_inicial, $data_final, $nome);

      if ($data) {
        echo "Paciente editado com sucesso";
      } else {
        echo "Erro ao editar paciente";
      }

    }

    header('Location: /NutriAgente/Public/pacientes');
  }

}