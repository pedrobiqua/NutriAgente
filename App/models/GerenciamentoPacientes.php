<?php
namespace App\models;

use App\core\Database;
use PDO;


class GerenciamentoPacientes
{

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function encontrarTodosPacientes($nutri_id)
  {
    $conn = new Database();
    $query = 'SELECT * FROM clientes WHERE nutricionista_id = "' . 7 . '"';
    $result = $conn->executeQuery($query);
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  
  public static function encontrarPaciente(int $nome)
  {
    echo "oieeeee";die;
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM clientes WHERE nome = :nome LIMIT 1', array(
      ':ID' => $nome
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function removerPaciente($id)
  {
    $conn = new Database();
    $query = 'UPDATE clientes SET nutricionista_id = NULL WHERE id = "' . $id . '"';
    $result = $conn->executeQuery($query);

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function adicionarPaciente($id_nutricionista, $nome, $objetivo, $peso, $altura, $data_inicio, $data_fim)
  {
    $conn = new Database();
    $query = "UPDATE clientes 
                SET nutricionista_id = '" . $id_nutricionista . "',
                    objetivo = '" . $objetivo . "',
                    peso = '" . $peso . "',
                    altura = '" . $altura . "',
                    data_inicio = '" . $data_inicio . "', 
                    data_final = '" . $data_fim . "'
              WHERE nome = '" . $nome . "'";

    $result = $conn->executeQuery($query);

    if ($result->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public static function editarPaciente($objetivo, $peso, $altura, $data_inicio, $data_fim, $nome)
  {
    $conn = new Database();
    $query = "UPDATE clientes 
                SET objetivo = '" . $objetivo . "',
                    peso = '" . $peso . "',
                    altura = '" . $altura . "',
                    data_inicio = '" . $data_inicio . "', 
                    data_final = '" . $data_fim . "'
              WHERE nome = '" . $nome . "'";

    $result = $conn->executeQuery($query);

    if ($result->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

}