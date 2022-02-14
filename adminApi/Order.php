<?php

require_once 'Good.php';

class Order {

    public $postParams; //POST параметры для отправки по API LV

    public function __construct(array $postParams) {
        if (!empty($postParams)) {
            foreach ($postParams as $key => $param) {
                if (!isset($param)) {
                    continue;
                }
                $this->postParams[$key] = $param;
            }
        }
        return $this;
    }

    //Метод по добавлению товара к заказу
    public static function addGood(Good $good) {
        return $good;
    }
}