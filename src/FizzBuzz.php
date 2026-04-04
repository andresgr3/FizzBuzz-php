<?php
namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function execute(int $number): string {
        $result = "";
        if($number % 3 === 0){
            $result .= "Fizz";
        }
        
        if($number % 5 === 0){
            $result .= "Buzz";
        }

        return empty($result) ? (string) $number : $result;

    }
}