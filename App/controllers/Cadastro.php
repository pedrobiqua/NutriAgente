<?php

use App\core\Controller;

class Cadastro extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('cadastro/index');
  }

  /*
  * Cadastra um novo usuario
  */
  public function cadastrar($cliente = '', $nutricionista = '', $loginuser, $senha, $nome)
  {
    $cadastro = $this->model('Cadastros');
    $tipo_usuario = '';

    // Verifica o tipo de usuario, se não for informado, é um cliente
    // Se marcar os dois será um cliente
    if($cliente == '' and $nutricionista == '') {
      $tipo_usuario = 'C';
    } else if ($cliente == 'C' and $nutricionista == 'N') {
      $tipo_usuario = 'C';
    } else if ($cliente == 'C' and $nutricionista == '') {
      $tipo_usuario = 'C';
    } else if ($cliente == '' and $nutricionista == 'N') {
      $tipo_usuario = 'N';
    }

    // Efetua o cadastro no banco
    $result_user = $cadastro::cadastrar($loginuser, $senha, $tipo_usuario);

    // Se ocorrer certo o cadastro, cadastra o tipo de usuario
    if( $result_user ) {
      // Sempre vai voltar apenas um id.
      $id = $cadastro::buscarCadastro($loginuser, $senha)[0]['id'];
      if( $id == '' or $id == null) {
        echo "Erro ao buscar o id do usuario";
        return false;
      }

      $result_type = $cadastro::cadastrarTipo($tipo_usuario, $id, $nome);

      if( $result_type ) {
        return true;
      } else {
        return false;
      }
    }

    return $result_user;
  }

}