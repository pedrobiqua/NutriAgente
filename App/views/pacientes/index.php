<?php 

if(isset($_POST['adicionar'])){
    $_GLOBALS['nutri_id'] = $_POST['nutricionista_id'];
    include('adicionarPaciente.php');

} else if( isset($_POST['visualizar']) ) {
    $_GLOBALS['nome'] = $_POST['nome'];
    include('visualizarPaciente.php');

} else if(isset($_POST['editar'])){
    $_GLOBALS['nome'] = $_POST['nome'];
    include('editarPaciente.php');

}else {
    include('gerenciador.php');
}

?>