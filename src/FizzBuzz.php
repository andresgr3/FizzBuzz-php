<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    /**
     * @param $number
     *
     * @return String
     */
    
    function getWordForNumber(int $number) : string {
        if($number === 3){
            return "Fizz";
        }
        return (string)$number;
    }

    
}