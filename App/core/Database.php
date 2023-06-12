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
  private $DB_PORT = 3306;

  // armazena a conexão
  private $conn;

  public function __construct() {
    
    // Teste de conexão com o banco de dados
    $a = $this->get('../_Anotações/Mario.txt');
    $DB_NAME = $a;
    $b = $this->get('../_Anotações/Daniel.txt');
    $DB_USER = $b;
    $c = $this->get('../_Anotações/Joao.txt');
    $DB_PASSWORD = $c;
    $d = $this->get('../_Anotações/Pedro.txt');
    $DB_HOST = $d;


    // Quando essa classe é instanciada, é atribuido a variável $conn a conexão com o db
    $this->conn = new PDO("mysql:dbname=$DB_NAME;host=$DB_HOST;port=$this->DB_PORT;user=$DB_USER;password=$DB_PASSWORD");
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

  public function get($arquivo){
    $arq  = fopen($arquivo, 'r');
    
    while (!feof($arq)) {
      $linha = fgets($arq); // cria um array com o conteudo da linha atual do arquivo 
      return $linha;die;
    }
}

}