<?php

class Good {
    private string $goodID = ''; // ID товара в проекте, он же номер алиаса на складе клиента
    private string $price = ''; //Цена за 1 единицу товара
    private string $quantity = ''; //Колличество товара

    public function getGoodID()
    {
        return $this->goodID;
    }

    public function setGoodID($goodID)
    {
        if (!preg_match('/\d/', $goodID)) {
            throw new Exception("ID товара может содержать только числа!");
        }
        $this->goodID = $goodID;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (!preg_match('/\d/', $price)) {
            throw new Exception("Цена товара может содержать только числа!");
        }
        $this->price = $price;
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        if (!preg_match('/\d/', $quantity)) {
            throw new Exception("Количество товара может содержать только числа!");
        }
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return array
     * Возвращает сущность Good готовую к отправке через Клиент.
     */
    public function toArray()
    {
        $goodArray = [
            'goodID' => $this->getGoodID(),
            'quantity' => $this->getQuantity(),
            'price' => $this->getPrice()
        ];

        foreach ($goodArray as $key => $item) {
            if (empty($item)) {
                unset($goodArray[$key]);
            }
        }

        return $goodArray;
    }
}