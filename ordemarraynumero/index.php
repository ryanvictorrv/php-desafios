<?php 

declare (strict_types=1);


    function sortArr($array)
    {
      $sorted = [];
    
      foreach ($array as $a) {
        $pos = 0;
        foreach ($sorted as $k => $s) {
          if ($a > $s) {
            $pos++;
          }
        }
    
        $added = false;
        foreach ($sorted as $k => $s) {
          if ($k === $pos && !$added) {
            $sorted[$k] = $a;
            $added = true;
          }
    
          $npos = $added ? $k + 1 : $k;
          $sorted[$npos] = $s;
        }
    
        if (!$added) {
          $sorted[] = $a;
        }
      }
    
      return $sorted;
    }
    
    print_r(sortArr([1, 2, 10, 50, 5]));
    print_r(sortArr([80, 29, 4, -95, -24, 85]));