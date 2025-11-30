<?php

class ExampleClass {
  private $privateValue = 'これはprivateメンバーです';

  protected $protectedValue = 'これはprotectedValueです';

  public function showValue(ExampleClass $obj) {
    echo $obj->privateValue . "\n";
    echo $obj->protectedValue . "\n";
  }
}

$example = new ExampleClass();
$obj = new ExampleClass();


class Animal {
  public function sound(){
    echo "動物の声\n";
  }

  protected function sleep() {
    echo "ぐーぐー\n";
  }
}

class Dog extends Animal {
  public function sound() {
    echo "わんわん\n";
  }

  public function callSleep() {
    $this->sleep();
  }
}

$dog = new Dog();
$dog->sound();
$dog->callSleep();