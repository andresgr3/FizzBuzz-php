<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    
    public function givenThreeReturnFizz(){
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->execute(3);
        $this->assertEquals("Fizz", $result);

    }
}
