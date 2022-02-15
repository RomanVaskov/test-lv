<?php

require_once 'Good.php';

class Order {
    public $fio = '';
    public $phone = '';
    public $email = '';
    public $comment = '';
    public $quantity = '';
    public $country = '';
    public $postIndex = '';
    public $region = '';
    public $city = '';
    public $address = '';
    public $house = '';
    public $flat = '';
    public $goods = '';
    public $additional1 = '';
    public $additional2 = '';
    public $additional3 = '';
    public $additional4 = '';
    public $additional5 = '';
    public $additional6 = '';
    public $additional7 = '';
    public $additional8 = '';
    public $additional9 = '';
    public $additional10 = '';
    public $additional11 = '';
    public $additional12 = '';
    public $additional13 = '';
    public $additional14 = '';
    public $additional15 = '';
    public $additional16 = '';
    public $additional17 = '';
    public $additional18 = '';
    public $additional19 = '';
    public $additional20 = '';
    public $additional21 = '';
    public $additional22 = '';
    public $additional23 = '';
    public $additional24 = '';
    public $additional25 = '';
    public $domain = '';
    public $referer = '';
    public $ip = '';
    public $datetime = '';
    public $timezone = '';
    public $operatorID = '';
    public $webmaster = '';

    //Метод по добавлению товара к заказу
    public function addGood(Good $good) {
        return $good;
    }
}