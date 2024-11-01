<?php 

declare (strict_types=1);

    function CapsLock($string) 
    {
      $str = '';
      $resultado = strlen($string);
      $letras = str_split($string);

      $trasnformacaoDaVez = 'upper';
      for ($i=0; $i<$resultado; $i++){
        $letra = $letras[$i];

        if($letra === ' ') {
          $str .= ' ';
          continue;
        } else if($trasnformacaoDaVez === 'upper') {
          $letra = strtoupper($letra);
          $trasnformacaoDaVez = 'lower';
        } else {
          $letra = strtolower($letra);
          $trasnformacaoDaVez = 'upper';
        }

        $str = $str . $letra;
      }

      return $str;
    }
    
    $string = CapsLock("hello");
    echo $string;



