<?php 

declare (strict_types=1);

 
    function CapsLock($string)
    {
        //string vazio
        $resultado = '';
        //pega o numero das letras
        $letras = strlen($string); 
        

        for ($i = 0; $i < $letras; $i++){
            if ($i % 2 == 0){
                $resultado .= strtoupper($string[$i]);
            }else{
                $resultado .= strtolower($string[$i]);
            }
        }
        return $resultado;       
    }
    $resultado = CapsLock("ryan") . PHP_EOL;
    echo $resultado;



