<?php
session_start();
$orderId = $_SESSION['order_id'];
$name = $_SESSION['order_name'];
$phone = $_SESSION['order_tel'];

$domain = $_SERVER['HTTP_HOST'];
$ip = $_SERVER['REMOTE_ADDR'];

$config = require_once "adminApi/config.php"; //Данные о проекте, ID проекта, API ключ
require_once "adminApi/LvClient.php"; //AdminApi
require_once "adminApi/Order.php";
require_once "adminApi/Good.php";
require_once "adminApi/Fields.php";

$goodID = $_POST['goodID'];
$price = $_POST['price'];

$addGood = new Good();
$addGood->setGoodID($goodID)->setPrice($price)->setQuantity(1);

$fields = new Fields();
$fields->setFio($name)
    ->setPhone($phone)
    ->setDomain($domain)
    ->setIp($ip)
    ->setGoods([
        'add' => [$addGood->toArray()]
    ]);

$order = new Order();
$order->setOrder($fields->toArray());

$clientUpdateOrder = new LvClient($config['project'], $config['key']);
$clientUpdateOrder->updateOrder($orderId, $order->getOrder());

//Получение информации о заказе
$orderData = $clientUpdateOrder->getOrderById($orderId);
$results = json_decode($orderData, true);
$_SESSION['order_data'] = $results;

header("Location: /success.php");