<?php
namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function execute(int $number): string {
        if ($number === 3){
            return "Fizz";
        }
        if($number === 5){
            return "Buzz";
        }
        if($number === 15){
            return "FizzBuzz";
        }
        return (string) $number;
    }
}