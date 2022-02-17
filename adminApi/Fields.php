<?php
class Fields {
    public $fio = '';
    private $phone = '';
    private $email = '';
    public $comment = '';
    public $quantity = '';
    public $country = '';
    private $postIndex = '';
    public $region = '';
    public $city = '';
    public $address = '';
    public $house = '';
    public $flat = '';
    public $goods = [];
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
        if (!preg_match('/^[\w-\._\+%]+@(?:[\w-]+\.)+[\w]{2,6}$/', $email)) {
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
}