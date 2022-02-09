<?php

require_once "Order.php";

class LvClient {
    const ADD_ORDER = 'addOrder';
    const UPDATE_ORDER = 'updateOrder';
    const GET_PROJECT_INFO = 'getProjectInfo';
    const GET_ORDERS_BY_IDS = 'getOrdersByIds';

    private $project; //Название проекта
    private $apiKey; //АПИ ключ от проекта

    private $orderData; //Массив данных для отправки POST запроса
    private $url; //URL запроса к АПИ
    private $orderId; //ИД заказа
    private $apiResponse; //Ответ от АПИ

    public function __construct($project, $apiKey) {
        $this->project = $project;
        $this->apiKey = $apiKey;
    }

    public function createOrder(Order $arrayData) {
        $this->orderData = $arrayData;
        return $arrayData;
    }

    public function updateOrder(Order $arrayData) {
        $this->orderData = $arrayData;
        return $arrayData;
    }

    public function getOrderById($orderId) {
        $this->setUrlParams(self::GET_ORDERS_BY_IDS, ['ids' => $orderId]);
        return $this->getData();
    }

    public function setUrlParams($method, $getParams) {
        $str = '';
        foreach ($getParams as $key => $value) {
            $str .= '&' . $key . '=' . $value;
        }
        $url = "https://{$this->project}.leadvertex.ru/api/admin/{$method}.html?token={$this->apiKey}{$str}";
        return $this->url = $url;
    }

    public function sendData() {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            CURLOPT_POSTFIELDS => http_build_query($this->orderData)
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        return $this->apiResponse = $response;
    }

    public function getData() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }

    public function getOrderId() {
        $response = json_decode($this->apiResponse, true);
        $array = array_keys($response);
        $id = array_shift($array);
        return $this->orderId = $id;
    }
}