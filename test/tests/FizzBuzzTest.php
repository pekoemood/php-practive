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

  public function test_5の倍数の場合、Buzzを返すこと(): void {
    //Given
    $sut = new FizzBuzz();

    //When
    $actual = $sut->execute(10);

    //Then
    $this->assertSame('Buzz', $actual);
  }

  public function test_3の倍数かつ5の倍数の場合、FizzBuzzを返すこと(): void {
    //Given
    $sut = new FizzBuzz();

    //When
    $actual = $sut->execute(15);

    //Then
    $this->assertSame('FizzBuzz', $actual);
  }

  public function test_3の倍数でも5の倍数でもない場合、数をそのまま返すこと(): void {
    //Given
    $sut = new FizzBuzz();

    //When
    $actual = $sut->execute(7);

    //Then
    $this->assertSame('7', $actual);
  }
}

