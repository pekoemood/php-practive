<?php

namespace App;

class FizzBuzz {
  public function execute(int $number): string {
    if ($number % 15 === 0) {
      return 'FizzBuzz';
    } elseif ($number % 3 === 0) {
      return 'Fizz';
    } elseif ($number % 5 === 0) {
      return 'Buzz';
    } else {
      return (string) $number;
    }
  }
}

