<?php
session_start();
$orderId = $_SESSION['order_id'];

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$domain = $_SERVER['HTTP_HOST'];
$ip = $_SERVER['REMOTE_ADDR'];

$config = require_once "adminApi/config.php"; //Данные о проекте, ID проекта, API ключ
require_once "adminApi/LvClient.php"; //AdminApi
require_once "adminApi/Order.php";
require_once "adminApi/Good.php";

$goodID = $_POST['goodID'];
$price = $_POST['price'];

$order = new Order();
$order->fio = $name;
$order->phone = $phone;
$order->domain = $domain;
$order->ip = $ip;
$order->goods = [
    'add' => [
        $order->addGood(new Good($goodID, $price, 1))
    ]
];

$clientUpdateOrder = new LvClient($config['project'], $config['key']);
$clientUpdateOrder->updateOrder($orderId, $order);

//Получение информации о заказе
$orderData = $clientUpdateOrder->getOrderById($orderId);
$results = json_decode($orderData, true);
$_SESSION['order_data'] = $results;

header("Location: /success.php");