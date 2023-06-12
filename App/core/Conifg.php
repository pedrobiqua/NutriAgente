<?php
namespace App\core;

class Config{

    public static function get($arquivo){
        
        echo $arquivo;die;

        
        $arq  = fopen($arquivo, 'r');
        
        while (!feof($arq)) {
            $linha = fgets($arq); // cria um array com o conteudo da linha atual do arquivo 
              
        }
    }
    
}
?>