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

$goodID = $_POST['goodID'];
$price = $_POST['price'];

$updateOrderAdmin = new LvClient($config['project'], $config['key']);
$updateOrderAdmin->setUrlParams(LvClient::UPDATE_ORDER, ['id' => $orderId]);
$updateOrderAdmin->updateOrder(
    new Order(
        $name,
        $phone,
        $domain,
        $ip, [
            'add' => [
                Order::addGood(new Good($goodID, $price, 1))
            ]
        ]
    ));
$updateOrderAdmin->sendData();
header("Location: /success.php");