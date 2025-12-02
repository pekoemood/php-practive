<?php

// class Rectangle {
//   public function __construct(protected int $width, protected int $height) {
//     if ($width <= 0 || $height <= 0) {
//       throw new InvalidArgumentException('幅と高さは正の整数である必要があります');
//     }
//   }

//   public function setWidth(int $width): void {
//     if ($width <= 0) {
//       throw new InvalidArgumentException('幅は正の整数である必要があります');
//     }
//     $this->width = $width;
//   }

//   public function setHeight(int $height): void {
//     if ($height <= 0) {
//       throw new InvalidArgumentException('高さは正の整数である必要があります');
//     }
//     $this->height = $height;
//   }

//   public function getArea(): int {
//     return $this->width * $this->height;
//   }
// }

// class Square extends Rectangle {
//   public function setWidth(int $width): void {
//     parent::setWidth($width);
//     $this->height = $width;
//   }

//   public function setHeight(int $height): void {
//     parent::setHeight($height);
//     $this->width = $height;
//   }
// }

// function printArea(Rectangle $rectangle, int $width, int $height): void {
//   if ($rectangle instanceof Square) {
//     $rectangle->setWidth(5);
//   } else {
//     $rectangle->setWidth(5);
//     $rectangle->setHeight(10);
//   }

//   echo '面積：' . $rectangle->getArea() . PHP_EOL;
// }

// $rectangle = new Rectangle(5, 10);
// printArea($rectangle, 5, 5);
// $square = new Square(5, 5);
// printArea($square, 5, 5);

interface Shape {
  public function getArea(): int;
}

class Rectangle implements Shape {
  public function __construct(private int $width, private int $height) {
    if ($width <= 0 || $height <= 0) {
      throw new InvalidArgumentException('幅と高さは正の整数である必要があります');
    }
  }

  public function setWidth(int $width): void {
    if ($width <= 0) {
      throw new InvalidArgumentException('幅は正の整数である必要があります');
    }
    $this->width = $width;
  }

  public function setHeight(int $height): void {
    if ($height <= 0) {
      throw new InvalidArgumentException('高さは正の整数である必要があります');
    }
    $this->height = $height;
  }

  public function getArea(): int {
    return $this->width * $this->height;
  }
}

class Square implements Shape {
  public function __construct(private int $side) {
    if ($side <= 0) {
      throw new InvalidArgumentException('辺の長さは正の整数である必要があります');
    }
  }

  public function setSide(int $side): void {
    if ($side <= 0) {
      throw new InvalidArgumentException('辺の長さは正の整数である必要があります');
    }
    $this->side = $side;
  }

  public function getArea(): int {
    return $this->side * $this->side;
  }
}

function printArea(Shape $shape): void {
  echo '面積:' . $shape->getArea() . PHP_EOL;
}

$square = new Square(5);
printArea($square);

$rectangle = new Rectangle(5, 10);
printArea($rectangle);

