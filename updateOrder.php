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
require_once "adminApi/Fields.php";

$goodID = $_POST['goodID'];
$price = $_POST['price'];

$updateOrderAdmin = new LvClient($config['project'], $config['key']);
$updateOrderAdmin->updateOrder(LvClient::UPDATE_ORDER, ['id' => $orderId],
    new Order([
        Fields::FIO => $name,
        Fields::PHONE => $phone,
        Fields::DOMAIN => $domain,
        Fields::IP => $ip,
        Fields::GOODS => [
            'add' => [
                Order::addGood(new Good($goodID, $price, 1))
            ]
        ]
    ]));

//Получение информации о заказе
$orderData = $updateOrderAdmin->getOrderById($orderId);
$results = json_decode($orderData, true);
$_SESSION['order_data'] = $results;

header("Location: /success.php");