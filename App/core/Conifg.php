<?php
namespace App\core;

class Config{

    public static function get($arquivo){
        
        $arq  = fopen($arquivo, 'r');
        
        while (!feof($arq)) {
            $linha = fgets($arq);
        }
    }
}
?>