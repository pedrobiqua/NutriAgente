<?php
namespace App\models;

use App\core\Database;
use PDO;
use PDOException;

/**
 * Descricao: Classe model da tela principal de entrada
 * 
 * Esta classe é responsavel por fazer a conexão com o banco de dados
 * e executar as querys de inserção, alteração e exclusão.
 * 
 * @author Pedro Bianchini de Quadros
 * @package App\models
 * @version 1.0.0
 */
class Cadastros
{

  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function cadastrar($login, $senha, $tipo_usuario)
  {
    try {
      $conn = new Database();

      // Preparação da query de inserção
      $query = "INSERT INTO usuarios(nome, senha, tipo_conta) VALUES ('" . $login . "', '" . $senha . "', '" . $tipo_usuario . "')";
      $result = $conn->executeQuery($query);

      // Verificação do sucesso da inserção
      if ($result->rowCount() > 0) {
        return true;
      } else {
        return false;
      }

    } catch (PDOException $e) {
      echo $e->errorInfo;
      return false;
    }
  }

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function cadastrarTipo($tipo_usuario, $id)
  {
    $conn = new Database();

    // Preparação da query de inserção
    if( $tipo_usuario == 'N' ) {
      $query = "INSERT INTO nutricionistas (usuario_id, registro, modelo_conta) VALUES ('" . $id . "', '', 'gratis')";
    } else {
      $query = "INSERT INTO clientes (usuario_id, nutricionista_id) VALUES ('" . $id . "', NULL)";
    }

    $result = $conn->executeQuery($query);

    // Verificação do sucesso da inserção
    if ($result->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  /**
  * Este método busca todos os usuários armazenados na base de dados
  *
  * @return   array
  */
  public static function buscarCadastro($login, $senha)
  {
    $conn = new Database();
    // Preparação da query de inserção
    $query = 'SELECT id FROM usuarios WHERE nome = "' . $login . '" AND senha = "' . $senha . '" LIMIT 1';

    $result = $conn->executeQuery($query);

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}