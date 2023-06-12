<?php

// Lembrar de Mudar a classe, pois vamos utilizar o MYSQL
namespace App\core;

use PDO;
/**
 * Descricao: Classe reponsavel pela conexão com o banco de dados MySql
 * 
 * @author Pedro Bianchini de Quadros
 * Data criacao: 30/05/2023
 * Data atualizacao: 30/05/2023
 * Atualizado por: Pedro Bianchini de Quadros
 */
class Database extends PDO {
  // configuração do banco de dados
  $config = include('config.php');

  $DB48a8ebf311f13452f1d55e396f01ccd4 = $config['48a8ebf311f13452f1d55e396f01ccd4'];
  $DB7b789f2b8da8b59f806bb8bf866e800b = $config['7b789f2b8da8b59f806bb8bf866e800b'];
  $DBc6f3987d4f24a601dd891fe2a7c3d779 = $config['c6f3987d4f24a601dd891fe2a7c3d779'];
  $DBd501317430077dd464c5d42282c329cb = $config['d501317430077dd464c5d42282c329cb'];
  $DB12d0c18bad42dc82bd67a6b8e7d049f7 = $config['12d0c18bad42dc82bd67a6b8e7d049f7'];

  // armazena a conexão
  private $conn;

  public function __construct() {
    // Quando essa classe é instanciada, é atribuido a variável $conn a conexão com o db
    $this->conn = new PDO("mysql:dbname=$this->DB48a8ebf311f13452f1d55e396f01ccd4;host=$this->DBd501317430077dd464c5d42282c329cb;port=$this->DB12d0c18bad42dc82bd67a6b8e7d049f7;user=$this->DB7b789f2b8da8b59f806bb8bf866e800b;password=$this->DBc6f3987d4f24a601dd891fe2a7c3d779");
  }

  /**
  * Este método recebe um objeto com a query 'preparada' e atribui as chaves da query
  * seus respectivos valores.
  * @param  PDOStatement  $stmt   Contém a query ja 'preparada'.
  * @param  string        $key    É a mesma chave informada na query.
  * @param  string        $value  Valor de uma determinada chave.
  */
  private function setParameters($stmt, $key, $value) {
    $stmt->bindParam($key, $value);
  }

  /**
  * A responsabilidade deste método é apenas percorrer o array de com os parâmetros
  * obtendo as chaves e os valores para fornecer tais dados para setParameters().
  * @param  PDOStatement  $stmt         Contém a query ja 'preparada'.
  * @param  array         $parameters   Array associativo contendo chave e valores para fornece a query
  */
  private function mountQuery($stmt, $parameters) {
    foreach( $parameters as $key => $value ) {
      $this->setParameters($stmt, $key, $value);
    }
  }

  /**
  * Este método é responsável por receber a query e os parametros, preparar a query
  * para receber os valores dos parametros informados, chamar o método mountQuery,
  * executar a query e retornar para os métodos tratarem o resultado.
  * @param  string   $query       Instrução SQL que será executada no banco de dados.
  * @param  array    $parameters  Array associativo contendo as chaves informada na query e seus respectivos valores
  *
  * @return PDOStatement
  */
  public function executeQuery(string $query, array $parameters = []) {
    $stmt = $this->conn->prepare($query);
    $this->mountQuery($stmt, $parameters);
    $stmt->execute();
    return $stmt;
  }

}