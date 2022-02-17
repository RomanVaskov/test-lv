<?php
class Fields {
    public $fio;
    private $phone;
    private $email;
    public $comment;
    private $quantity;
    public $country;
    private $postIndex;
    public $region;
    public $city;
    public $address;
    public $house;
    public $flat;
    public $goods;
    public $additional1;
    public $additional2;
    public $additional3;
    public $additional4;
    public $additional5;
    public $additional6;
    public $additional7;
    public $additional8;
    public $additional9;
    public $additional10;
    public $additional11;
    public $additional12;
    public $additional13;
    public $additional14;
    public $additional15;
    public $additional16;
    public $additional17;
    public $additional18;
    public $additional19;
    public $additional20;
    public $additional21;
    public $additional22;
    public $additional23;
    public $additional24;
    public $additional25;
    public $domain;
    public $referer;
    public $ip;
    public $datetime;
    public $timezone;
    public $operatorID;
    public $webmaster;

    public function setPhone($phone) {
        if (!preg_match('/^\+?\d{9,15}$/', $phone)) {
            throw new Exception("Телефон может содержать только числа и от 9 до 15 символов!");
        } else {
            $this->phone = $phone;
        }
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
        if (!preg_match('/(^[a-zA-Z0-9_.]+[@]{1}[a-z0-9]+[\.][a-z]+$)/', $email)) {
            throw new Exception("Формат Email не верный!");
        } else {
            $this->email = $email;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPostIndex($postIndex) {
        if (!preg_match('/^\d{5,6}$/', $postIndex)) {
            throw new Exception("Почтовый индекс может содержать только числа и от 5 до 6 символов!");
        }
        $this->postIndex = $postIndex;
    }

    public function getPostIndex() {
        return $this->postIndex;
    }

    public function setQuantity($quantity) {
        if (!preg_match('/^\d$/', $quantity)) {
            throw new Exception("Количество товара может содержать только числа!");
        }
        $this->quantity = $quantity;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * @return array
     * Возвращает сущность Fields готовую к отправке через Клиент.
     */
    public function toArray()
    {
        $fieldsArray = [
            'fio' => $this->fio,
            'phone' => $this->getPhone(),
            'email' => $this->getEmail(),
            'comment' => $this->comment,
            'quantity' => $this->quantity,
            'country' => $this->country,
            'postIndex' => $this->getPostIndex(),
            'region' => $this->region,
            'city' => $this->city,
            'address' => $this->address,
            'house' => $this->house,
            'flat' => $this->flat,
            'goods' => $this->goods,
            'additional1' => $this->additional1,
            'additional2' => $this->additional2,
            'additional3' => $this->additional3,
            'additional4' => $this->additional4,
            'additional5' => $this->additional5,
            'additional6' => $this->additional6,
            'additional7' => $this->additional7,
            'additional8' => $this->additional8,
            'additional9' => $this->additional9,
            'additional10' => $this->additional10,
            'additional11' => $this->additional11,
            'additional12' => $this->additional12,
            'additional13' => $this->additional13,
            'additional14' => $this->additional14,
            'additional15' => $this->additional15,
            'additional16' => $this->additional16,
            'additional17' => $this->additional17,
            'additional18' => $this->additional18,
            'additional19' => $this->additional19,
            'additional20' => $this->additional20,
            'additional21' => $this->additional21,
            'additional22' => $this->additional22,
            'additional23' => $this->additional23,
            'additional24' => $this->additional24,
            'additional25' => $this->additional25,
            'domain' => $this->domain,
            'referer' => $this->referer,
            'ip' => $this->ip,
            'datetime' => $this->datetime,
            'timezone' => $this->timezone,
            'operatorID' => $this->operatorID,
            'webmaster' => $this->webmaster,
        ];

        foreach ($fieldsArray as $key => $item) {
            if (!isset($item)) {
                unset($fieldsArray[$key]);
            }
        }

        return $fieldsArray;
    }
}