<?php
    function PossibleRoute($routes) //Precisa melhorar kkkkkkk ^_^
    {
        foreach ($routes as $key => $route)
        {
            if (isset($routes[$key + 1]) == false){
                break;    
            }

            $nextRoute = $routes[$key + 1];
        
            if ($route == 4 and $nextRoute == 3 or $nextRoute == "H"){
                
                continue;
            }elseif ($route == 3 and $nextRoute == 4){
                
                continue;
            }elseif ($route == 1 and $nextRoute == 2){
                continue;
            }elseif($route == 2 and $nextRoute == 1 or $nextRoute == "H"){
                continue;
            }elseif ($route == "H" and $nextRoute == 2 or $nextRoute == 4){
                continue;
            }else{
                
                return "False";
            }
            
        }
        return "True";
    }
    
    echo PossibleRoute(["H", 1, 2]);