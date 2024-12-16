<?php 

function compress($arrays): string {

    $novoArray = [];
    
    
    foreach ($arrays as $letra) {
        if (isset($novoArray[$letra]) == true) {
            $novoArray[$letra] += 1;
        } elseif ($novoArray[$letra] = 1) {
            $novoArray[$letra] = 1;
        }

    }

    $string = '';
    foreach ($novoArray as $letra => $contarLetras) {
        if ($contarLetras == 1){
            $string .= $letra;
        }else{
            $string .= $letra . $contarLetras;
        }
    }

    return $string  . PHP_EOL;
}

echo compress(["a"]);