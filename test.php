<?php

class SampleClass {
  private string $name;
  private int $value = 2;

  private static string $myName = 'sample';

  public function __construct($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name . "\n";
  }

  public function showValue() {
    echo "値：{$this->value}\n";
    echo "静的な名前：" . self::$myName;
  }
}



class Person {
  public function __construct(
    public string $name,
    public int $age
  ){}
}

$person = new Person('塩', 31);

echo $person->name;
