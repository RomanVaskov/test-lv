<?php
session_start();
$config = require_once "adminApi/config.php"; //Данные о проекте, ID проекта, API ключ
require_once "adminApi/LvClient.php"; //AdminApi

$clientProject = new LvClient($config['project'], $config['key']);
$info = $clientProject->getInfo(LvClient::GET_PROJECT_INFO, []);
$results = json_decode($info, true);
$_SESSION['results'] = $results;

header("Location: /");