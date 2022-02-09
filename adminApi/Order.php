<?php

require_once 'Good.php';

class Order {
    public $fio; //Имя покупателя
    public $phone; //Телефон покупателя
    public $domains; //Домен с которого был сделан заказ
    public $ip; //IP адрес с которого был сделан заказ
    public $goods; //Товар, который заказал покупатель

    public function __construct($fio,$phone,$domains,$ip,$goods) {
        $this->fio = $fio;
        $this->phone = $phone;
        $this->domains = $domains;
        $this->ip = $ip;
        $this->goods = $goods;
    }

    //Метод по добавлению товара к заказу
    public static function addGood(Good $good) {
        return $good;
    }
}