<?php
require 'vendor/autoload.php';

use App\ShoppingCart;

$cart = new ShoppingCart();

$productA = [
    'id' => '1',
    'name' => 'productA',
    'price' => 100,
    'quantity' => 1,
];

$productB = [
    'id' => '2',
    'name' => 'productB',
    'price' => 200,
    'quantity' => 2,
];

$cart->insert($productA);
$cart->insert($productB);

echo '總數量：' . $cart->totalAmount() . '<br>';
echo '總價錢：' . $cart->totalPrice();

$cart->destroy();
