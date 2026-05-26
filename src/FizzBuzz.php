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
        if($number % 3 === 0 && $number % 5 === 0){
            return "FizzBuzz";
        }
        if($number % 3 === 0){
            return "Fizz";
        }
        if ($number % 5 === 0){
            return "Buzz";
        }
        return (string)$number;
    }

    
}