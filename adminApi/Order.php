<?php

require_once 'Good.php';

class Order {
    private $arrayData;

    public function __construct($arrayData) {
        $this->arrayData = $arrayData;
    }

    public function addGood($goodId, $price, $quantity) {
        return (new Good($goodId,$price,$quantity))->toArray();
    }

    public function getOrderData() {
        return $this->arrayData;
    }
}