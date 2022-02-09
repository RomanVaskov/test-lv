<?php
if (isset ($_POST['send_user'])) { // запрет прямого обращения к обработчику
    session_start();
    $config = require_once "adminApi/config.php"; //Данные о проекте, ID проекта, API ключ
    require_once "adminApi/LvClient.php"; //AdminApi
    require_once "adminApi/Order.php";

    $name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    $domain = $_SERVER['HTTP_HOST'];
    $ip = $_SERVER['REMOTE_ADDR'];

    // Обрабатываем данные полученные с html-формы, формируем нужные переменные
    if (isset ($_POST['user_name'])) {
        htmlspecialchars($name);
        trim($name);
        $_SESSION['order_name'] = $name;
    }
    if ($name == "") {
        unset ($name);
    }
    if (isset ($_POST['user_phone'])) {
        htmlspecialchars($phone);
        trim($phone);
        $_SESSION['order_tel'] = $phone;
    }
    if ($phone == "") {
        unset ($phone);
    }

    $order = new LvClient($config['project'], $config['key']);
    $order->setUrlParams(LvClient::ADD_ORDER, []);
    $order->createOrder(
        new Order(
            $name,
            $phone,
            $domain,
            $ip,
            [
                Order::addGood(new Good(152576, 99, 1)),
                Order::addGood(new Good(93440, 999, 1)),
            ]
        ));
    $order->sendData();
    $idOrder = $order->getOrderId();
    $_SESSION['order_id'] = $idOrder;

    //Получение информации о заказе
    $orderData = $order->getOrderById($idOrder);
    $results = json_decode($orderData, true);
    $_SESSION['order_data'] = $results;
    header("Location: /success.php");
}