<?php

require_once 'Good.php';

class Order {
    public $order;

    function __construct($order) {
        $this->order = $order;
    }

    //Метод по добавлению товара к заказу
    public function addGood(Good $good) {
        return $good;
    }
}