<?php

namespace App;

class FizzBuzz {
  public function execute(int $number): string {
    //3の倍数は、3で割った時に余りが０になるというのと同義
    if ($number % 3 === 0) {
      return 'Fizz';
    }
    return (string) $number;
  }
}