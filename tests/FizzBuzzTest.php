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

    /**
     * @test
     */
    public function givenFiveReturnBuzz(){
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute(5);

        $this->assertEquals("Buzz", $result);

    }

    /**
     * @test
     */
    public function givenFifteenRetrunFizzBuzz(){
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute(15);

        $this->assertEquals("FizzBuzz", $result);
    }

    /**
     * @test
     */
    public function givenSixReturnFizz(){
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->execute(6);

        $this->assertEquals("Fizz", $result);
    }
}
