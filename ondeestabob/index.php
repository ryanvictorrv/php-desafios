<?php

declare (strict_types=1);

function whereBob(array $name): int
{
    $people = array($name);
    foreach($name as $key => $n)
    {
        if ($n == "Bob"){
            return $key;
        }
    }
    
    return -1;
    
}
$people = whereBob(["Layla","Bob", "Kaitlyn", "Patricia"]);
echo $people;