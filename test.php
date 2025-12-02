<?php

// // PaymentProcessorクラス：　支払い処理
// class PaymentProcessor {
//   public function processPayment(string $payment, int $amount): void {
//     //支払い方法ごとに条件分岐して、書く支払い処理をここで行う
//     if ($payment === 'credit_card') {
//       //クレジットカードでの支払い処理
//       echo "Paid $amount using Credit Card\n";
//     } elseif ($payment === 'paypal') {
//       //PayPalでの支払い処理
//       echo "Paid $amount using PayPal\n";
//     }
//     //新しい支払い方法が追加されるたびに条件が増える
//   }
// }

// $processor = new PaymentProcessor();
// $processor->processPayment('credit_card', 500);

interface PaymentInterface {
  public function pay(int $amount): void;
}

//CreditCardPaymentクラス：　PaymentInterfaceを実装
class CreditCardPayment implements PaymentInterface {
  public function pay(int $amount): void {
    echo "Paid {$amount} using Credit Card\n";
  }
}

class PayPalPayment implements PaymentInterface {
  public function pay(int $amount): void {
    echo "Paid {$amount} using PayPalPayment";
  }
}

class PaymentProcessor {
  public function processPayment(PaymentInterface $payment, int $amount): void {
    $payment->pay($amount);
  }
}

$creditCard = new CreditCardPayment();
$payPalPayment = new PayPalPayment();

$processor = new PaymentProcessor();
$processor->processPayment($creditCard, 500);
$processor->processPayment($payPalPayment, 1000);


