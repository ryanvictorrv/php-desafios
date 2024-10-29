<?php 
declare(strict_types=1);

enum Numero
{
    case True;
    case False;


    public function validate($validate)
    {
        return match (true){
            $validate <=  0 => static::True,
            $validate >  0 => static::False,
        };
    }
}