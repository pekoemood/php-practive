<?php
namespace App;
class Foo {
  public function __construct(private Bar $bar) {}

  public function useBar(string $arg): string {
    return $this->bar->doSomethings($arg);
  }
}

