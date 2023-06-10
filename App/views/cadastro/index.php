<?php

if (isset($_POST['submit'])) {
    
    $loginuser = $_POST['email'];
    $senha = $_POST['password'];
    $nome = $_POST['nome'];

    $cliente = $_POST['cliente'];
    $nutricionista = $_POST['nutricionista'];

    require_once('../App/controllers/Cadastro.php');
    $cadastro = new Cadastro();
    $result = $cadastro->cadastrar($cliente, $nutricionista, $loginuser, $senha, $nome);

    if( $result ) {
        include('resultado.php');
    } else {
        include('cadastro.php');
    }

} else {
    include('cadastro.php');
}