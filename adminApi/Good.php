<?php

class Good {
    public $goodID;// ID товара в проекте, он же номер алиаса на складе клиента
    public $price;//Цена за 1 единицу товара
    public $quantity;//Колличество товара

    public function __construct($goodID, $price, $quantity) {
        $this->goodID = $goodID;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}