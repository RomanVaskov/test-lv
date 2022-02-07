<?php
session_start();
$config = require_once "adminApi/config.php"; //Данные о проекте, ID проекта, API ключ
require_once "adminApi/LvClient.php"; //AdminApi

$dataProject = new LvClient($config['project'], $config['key'], LvClient::GET_PROJECT_INFO);
$dataProject->setUrlGetParams([]);
$projectInfo = $dataProject->getData();

$results = json_decode($projectInfo, true);
$_SESSION['results'] = $results;

header("Location: /index.php");