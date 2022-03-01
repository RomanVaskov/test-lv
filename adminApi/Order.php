<?php

require_once 'Good.php';

class Order {
    private $order;

    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    public function getOrder()
    {
        return $this->order;
    }
}