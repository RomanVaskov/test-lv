<?php

class Fields
{
    private $fio;
    private $phone;
    private $email;
    private $comment;
    private $quantity;
    private $country;
    private $postIndex;
    private $region;
    private $city;
    private $address;
    private $house;
    private $flat;
    private $goods;
    private $additional1;
    private $additional2;
    private $additional3;
    private $additional4;
    private $additional5;
    private $additional6;
    private $additional7;
    private $additional8;
    private $additional9;
    private $additional10;
    private $additional11;
    private $additional12;
    private $additional13;
    private $additional14;
    private $additional15;
    private $additional16;
    private $additional17;
    private $additional18;
    private $additional19;
    private $additional20;
    private $additional21;
    private $additional22;
    private $additional23;
    private $additional24;
    private $additional25;
    private $domain;
    private $referer;
    private $ip;
    private $datetime;
    private $timezone;
    private $operatorID;
    private $webmaster;

    /*
     * Getter
     */

    public function getFio()
    {
        return $this->fio;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getPostIndex()
    {
        return $this->postIndex;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getHouse()
    {
        return $this->house;
    }

    public function getFlat()
    {
        return $this->flat;
    }

    public function getGoods()
    {
        return $this->goods;
    }

    public function getAdditional1()
    {
        return $this->additional1;
    }

    public function getAdditional2()
    {
        return $this->additional2;
    }

    public function getAdditional3()
    {
        return $this->additional3;
    }

    public function getAdditional4()
    {
        return $this->additional4;
    }

    public function getAdditional5()
    {
        return $this->additional5;
    }

    public function getAdditional6()
    {
        return $this->additional6;
    }

    public function getAdditional7()
    {
        return $this->additional7;
    }

    public function getAdditional8()
    {
        return $this->additional8;
    }

    public function getAdditional9()
    {
        return $this->additional9;
    }

    public function getAdditional10()
    {
        return $this->additional10;
    }

    public function getAdditional11()
    {
        return $this->additional11;
    }

    public function getAdditional12()
    {
        return $this->additional12;
    }

    public function getAdditional13()
    {
        return $this->additional13;
    }

    public function getAdditional14()
    {
        return $this->additional14;
    }

    public function getAdditional15()
    {
        return $this->additional15;
    }

    public function getAdditional16()
    {
        return $this->additional16;
    }

    public function getAdditional17()
    {
        return $this->additional17;
    }

    public function getAdditional18()
    {
        return $this->additional18;
    }

    public function getAdditional19()
    {
        return $this->additional19;
    }

    public function getAdditional20()
    {
        return $this->additional20;
    }

    public function getAdditional21()
    {
        return $this->additional21;
    }

    public function getAdditional22()
    {
        return $this->additional22;
    }

    public function getAdditional23()
    {
        return $this->additional23;
    }

    public function getAdditional24()
    {
        return $this->additional24;
    }

    public function getAdditional25()
    {
        return $this->additional25;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function getReferer()
    {
        return $this->referer;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getDatetime()
    {
        return $this->datetime;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function getOperatorID()
    {
        return $this->operatorID;
    }

    public function getWebmaster()
    {
        return $this->webmaster;
    }

    /*
     * Setter
     */

    public function setFio($fio)
    {
        if (!preg_match('/^.+$/', $fio)) {
            throw new Exception("ФИО может содержать любые символы!");
        } else {
            $this->fio = $fio;
        }
        return $this;
    }

    public function setPhone($phone)
    {
        if (!preg_match('/^\+?\d{9,15}$/', $phone)) {
            throw new Exception("Телефон может содержать только числа и от 9 до 15 символов!");
        } else {
            $this->phone = $phone;
        }
        return $this;
    }

    public function setEmail($email)
    {
        if (!preg_match('/(^[a-zA-Z0-9_.]+[@]{1}[a-z0-9]+[\.][a-z]+$)/', $email)) {
            throw new Exception("Формат Email не верный!");
        } else {
            $this->email = $email;
        }
        return $this;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function setQuantity($quantity)
    {
        if (!preg_match('/^\d$/', $quantity)) {
            throw new Exception("Количество товара может содержать только числа!");
        }
        $this->quantity = $quantity;
        return $this;
    }

    public function setPostIndex($postIndex)
    {
        if (!preg_match('/^\d{5,6}$/', $postIndex)) {
            throw new Exception("Почтовый индекс может содержать только числа и от 5 до 6 символов!");
        }
        $this->postIndex = $postIndex;
        return $this;
    }

    public function setAdditional1($additional1)
    {
        $this->additional1 = $additional1;
        return $this;
    }

    public function setAdditional2($additional2)
    {
        $this->additional2 = $additional2;
        return $this;
    }

    public function setAdditional3($additional3)
    {
        $this->additional3 = $additional3;
        return $this;
    }

    public function setAdditional4($additional4)
    {
        $this->additional4 = $additional4;
        return $this;
    }

    public function setAdditional5($additional5)
    {
        $this->additional5 = $additional5;
        return $this;
    }

    public function setAdditional6($additional6)
    {
        $this->additional6 = $additional6;
        return $this;
    }

    public function setAdditional7($additional7)
    {
        $this->additional7 = $additional7;
        return $this;
    }

    public function setAdditional8($additional8)
    {
        $this->additional8 = $additional8;
        return $this;
    }

    public function setAdditional9($additional9)
    {
        $this->additional9 = $additional9;
        return $this;
    }

    public function setAdditional10($additional10)
    {
        $this->additional10 = $additional10;
        return $this;
    }

    public function setAdditional11($additional11)
    {
        $this->additional11 = $additional11;
        return $this;
    }

    public function setAdditional12($additional12)
    {
        $this->additional12 = $additional12;
        return $this;
    }

    public function setAdditional13($additional13)
    {
        $this->additional13 = $additional13;
        return $this;
    }

    public function setAdditional14($additional14)
    {
        $this->additional14 = $additional14;
        return $this;
    }

    public function setAdditional15($additional15)
    {
        $this->additional15 = $additional15;
        return $this;
    }

    public function setAdditional16($additional16)
    {
        $this->additional16 = $additional16;
        return $this;
    }

    public function setAdditional17($additional17)
    {
        $this->additional17 = $additional17;
        return $this;
    }

    public function setAdditional18($additional18)
    {
        $this->additional18 = $additional18;
        return $this;
    }

    public function setAdditional19($additional19)
    {
        $this->additional19 = $additional19;
        return $this;
    }

    public function setAdditional20($additional20)
    {
        $this->additional20 = $additional20;
        return $this;
    }

    public function setAdditional21($additional21)
    {
        $this->additional21 = $additional21;
        return $this;
    }

    public function setAdditional22($additional22)
    {
        $this->additional22 = $additional22;
        return $this;
    }

    public function setAdditional23($additional23)
    {
        $this->additional23 = $additional23;
        return $this;
    }

    public function setAdditional24($additional24)
    {
        $this->additional24 = $additional24;
        return $this;
    }

    public function setAdditional25($additional25)
    {
        $this->additional25 = $additional25;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
        return $this;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    public function setFlat($flat)
    {
        $this->flat = $flat;
        return $this;
    }

    public function setGoods($goods)
    {
        $this->goods = $goods;
        return $this;
    }

    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    public function setOperatorID($operatorID)
    {
        $this->operatorID = $operatorID;
        return $this;
    }

    public function setReferer($referer)
    {
        $this->referer = $referer;
        return $this;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    public function setWebmaster($webmaster)
    {
        $this->webmaster = $webmaster;
        return $this;
    }

    /**
     * @return array
     * Возвращает сущность Fields готовую к отправке через Клиент.
     */
    public function toArray()
    {
        $fieldsArray = [
            'fio' => $this->getFio(),
            'phone' => $this->getPhone(),
            'email' => $this->getEmail(),
            'comment' => $this->getComment(),
            'quantity' => $this->getQuantity(),
            'country' => $this->getCountry(),
            'postIndex' => $this->getPostIndex(),
            'region' => $this->getRegion(),
            'city' => $this->getCity(),
            'address' => $this->getAddress(),
            'house' => $this->getHouse(),
            'flat' => $this->getFlat(),
            'goods' => $this->getGoods(),
            'additional1' => $this->getAdditional1(),
            'additional2' => $this->getAdditional2(),
            'additional3' => $this->getAdditional3(),
            'additional4' => $this->getAdditional4(),
            'additional5' => $this->getAdditional5(),
            'additional6' => $this->getAdditional6(),
            'additional7' => $this->getAdditional7(),
            'additional8' => $this->getAdditional8(),
            'additional9' => $this->getAdditional9(),
            'additional10' => $this->getAdditional10(),
            'additional11' => $this->getAdditional11(),
            'additional12' => $this->getAdditional12(),
            'additional13' => $this->getAdditional13(),
            'additional14' => $this->getAdditional14(),
            'additional15' => $this->getAdditional15(),
            'additional16' => $this->getAdditional16(),
            'additional17' => $this->getAdditional17(),
            'additional18' => $this->getAdditional18(),
            'additional19' => $this->getAdditional19(),
            'additional20' => $this->getAdditional20(),
            'additional21' => $this->getAdditional21(),
            'additional22' => $this->getAdditional22(),
            'additional23' => $this->getAdditional23(),
            'additional24' => $this->getAdditional24(),
            'additional25' => $this->getAdditional25(),
            'domain' => $this->getDomain(),
            'referer' => $this->getReferer(),
            'ip' => $this->getIp(),
            'datetime' => $this->getDatetime(),
            'timezone' => $this->getTimezone(),
            'operatorID' => $this->getOperatorID(),
            'webmaster' => $this->getWebmaster(),
        ];

        foreach ($fieldsArray as $key => $item) {
            if (!isset($item)) {
                unset($fieldsArray[$key]);
            }
        }

        return $fieldsArray;
    }
}