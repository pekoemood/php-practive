<?php

class Item {
  public function __construct(private int $price) {}

  public function getPrice(): int {
    return $this->price;
  }
}

class ShoppingCart {
  /** @var Item[] $items */
  private array $items = [];

  public function addItem(Item $items): void {
    $this->items[] = $items;
  }

  public function removeItem(Item $item): void {
    $this->items = array_filter($this->items, fn(Item $v) => $v !== $item);
  }

  public function processPayment(string $paymentDetails): void {
    $total = $this->calculateTotal();

    echo "合計： {$total}円, {$paymentDetails}を使用して処理します\n";
  }

  private function calculateTotal(): int {
    return array_reduce($this->items, fn($total, Item $item) => $total + $item->getPrice(), 0);
  }
}

$cart = new ShoppingCart();
$item1 = new Item(100);
$item2 = new Item(50);

$cart->addItem($item1);
$cart->addItem($item2);
$cart->processPayment('現金');