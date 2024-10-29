<?php 

declare (strict_types=1);

class Numero
{

    public function validateNumber($number)
    {
        echo $number<=0 ? 'True' : 'False';
    }
}

$numero = new Numero;
$numero->validateNumber(5);
$numero->validateNumber(0);
$numero->validateNumber(-2);
