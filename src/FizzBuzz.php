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
        if($number === 2){
            return "2";
        }
        return "1";
    }

    
}