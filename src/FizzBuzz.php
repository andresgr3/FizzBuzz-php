<?php
namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function execute(int $number): string {
        if ($number === 3){
            return "Fizz";
        }
        return (string) $number;
    }
}