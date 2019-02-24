<?php
namespace App;

use Moltin\Cart\Cart;
use Moltin\Cart\Identifier\Cookie;
use Moltin\Cart\Storage\Session;

class ShoppingCart
{
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart(new Session, new Cookie);
    }

    public function insert($data)
    {
        $this->cart->insert($data);
    }

    public function destroy()
    {
        $this->cart->destroy();
    }

    public function totalAmount()
    {
        return $this->cart->totalItems();
    }

    public function totalPrice()
    {
        return $this->cart->total();
    }

}
