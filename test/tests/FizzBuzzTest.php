<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
  public function test_3の倍数の場合、Fizzを返すこと(): void {
    // Given
    $sut = new FizzBuzz();

    //When
    $actual = $sut->execute(6);

    //Then
    $this->assertSame('Fizz', $actual);
  }
}

