<?php

class Good {
    const MODE_ADD = 'add';
    const MODE_UPDATE = 'update';
    const MODE_DELETE = 'delete';

    // ID товара в проекте, он же номер алиаса на складе клиента
    private $goodID;

    //Цена за 1 единицу товара
    private $price;

    //Колличество товара
    private $quantity;

    public function __construct($goodID, $price, $quantity)
    {
        $this->goodID = $goodID;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    //Сформировать товар, который будет в заказе
    public function toArray(): array
    {
        $goodArray = [
            'goodID' => $this->goodID,
            'price' => $this->price,
            'quantity' => $this->quantity
        ];

        foreach ($goodArray as $key => $item) {
            if (!isset($item)) {
                unset($goodArray[$key]);
            }
        }

        return $goodArray;
    }
}