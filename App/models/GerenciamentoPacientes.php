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

  
  public static function encontrarPaciente(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM users WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
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

}