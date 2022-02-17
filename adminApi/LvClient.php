<?php

require_once "Order.php";

class LvClient {
    const ADD_ORDER = 'addOrder';
    const UPDATE_ORDER = 'updateOrder';
    const GET_PROJECT_INFO = 'getProjectInfo';
    const GET_ORDERS_BY_IDS = 'getOrdersByIds';

    private $project; //Название проекта
    private $apiKey; //АПИ ключ от проекта

    private $orderId; //ИД заказа

    public function __construct($project, $apiKey) {
        $this->project = $project;
        $this->apiKey = $apiKey;
    }

    public function createOrder($order) {
        $url = $this->setUrlParams(self::ADD_ORDER, []);
        $response = $this->sendData($url, $order->order);
        return $this->orderId($response);
    }

    public function updateOrder($orderId, $order) {
        $url = $this->setUrlParams(self::UPDATE_ORDER, ['id' => $orderId]);
        $response = $this->sendData($url, $order->order);
        return $response;
    }

    public function getOrderById($orderId) {
        $url = $this->setUrlParams(self::GET_ORDERS_BY_IDS, ['ids' => $orderId]);
        return $this->getData($url);
    }

    public function getIdOrder() {
        return $this->orderId;
    }

    public function getInfo($method, $getParams) {
        $url = $this->setUrlParams($method, $getParams);
        return $this->getData($url);
    }

    private function orderId($apiResponse) {
        $response = json_decode($apiResponse, true);
        $array = array_keys($response);
        $id = array_shift($array);
        return $this->orderId = $id;
    }

    private function setUrlParams($method, $getParams) {
        $str = '';
        foreach ($getParams as $key => $value) {
            $str .= '&' . $key . '=' . $value;
        }
        $url = "https://{$this->project}.leadvertex.ru/api/admin/{$method}.html?token={$this->apiKey}{$str}";
        return $url;
    }

    private function sendData($url, $orderData) {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            CURLOPT_POSTFIELDS => http_build_query($orderData)
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    private function getData($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}