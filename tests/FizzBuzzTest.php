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
    public function forNumberOneReturnStringOne(){
        $fizzbuzz = new FizzBuzz();

        $integerValue = $fizzbuzz->getWordForNumber(1);

        $this->assertEquals($integerValue, "1");

    }
}
