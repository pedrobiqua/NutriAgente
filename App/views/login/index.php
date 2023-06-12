<?php session_start(); ?>
<?php


if(!isset($_SESSION['login'])) // if user isn't logged in
{
    if (isset($_POST['submit'])) {
        
        $loginuser = $_POST['login'];
        $senha = $_POST['senha'];

        require_once('../App/controllers/Login.php');
        $login = new Login();
        $result = $login->iniciarSessao($loginuser, $senha);

        if( $result["resultado"] ) {
            $_SESSION['login'] = $result;
            if ($result["tipo"] == "N") {
                header('Location: /NutriAgente/Public/nutricionista');
            }
            if ($result["tipo"] == "C") {
                header('Location: /NutriAgente/Public/cliente');
            }

        } else {
            include('login.php');
        }

    }

    include('login.php');

} else {
    header('Location: /NutriAgente/Public/login');
    $_SESSION['login'] = null;
}