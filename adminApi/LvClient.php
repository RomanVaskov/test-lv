<?php

require_once "Order.php";

class LvClient {
    const ADD_ORDER = 'addOrder';
    const UPDATE_ORDER = 'updateOrder';
    const GET_PROJECT_INFO = 'getProjectInfo';

    private $project; //Название проекта
    private $apiKey; //АПИ ключ от проекта
    private $method; //Метод обработки информации
    private $orderId; //ИД заказа

    private $orderData; //Массив данных для отправки POST запроса
    private $url; //URL запроса к АПИ

    public function __construct($project, $apiKey, $method) {
        $this->project = $project;
        $this->apiKey = $apiKey;
        $this->method = $method;
    }

    public function createOrder($arrayData) {
        $response = (new Order($arrayData))->getOrderData();
        return $this->orderData = $response;
    }

    public function setUrlGetParams($getParams) {
        $str = '';
        foreach ($getParams as $key => $value) {
            $str .= '&' . $key . '=' . $value;
        }
        $url = "https://{$this->project}.leadvertex.ru/api/admin/{$this->method}.html?token={$this->apiKey}{$str}";
        return $this->url = $url;
    }

    private function orderId($result) {
        $response = json_decode($result, true);
        $array = array_keys($response);
        $id = array_shift($array);
        return $id;
    }

    public function getOrderId() {
        return $this->orderId;
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
        $this->orderId = $this->orderId($response);
        curl_close($curl);
        return $response;
    }

    public function getData() {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}