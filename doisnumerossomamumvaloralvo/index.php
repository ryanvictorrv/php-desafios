<?php
    function AddUp($a, $b, $v) {
        
        $set = [];
    
        
        foreach ($a as $numA) {
            $set[$numA] = true;
        }
    
        
        foreach ($b as $numB) {
            
            $diferença = $v - $numB;
    
           
            if (isset($set[$diferença])) {
                return true;
            }
        }
    
        return false;
    }
    
if (AddUp([1, 2], [4, 5, 6], 3)) {
    echo "True" . PHP_EOL;
} else {
    echo "False" . PHP_EOL;
}
?>