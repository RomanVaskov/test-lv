<?php
session_start();
$name = $_SESSION['order_name'];
$tel = $_SESSION['order_tel'];
$orderId = $_SESSION['order_id'];
$orderData = $_SESSION['order_data'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Спасибо</title>
</head>
<body>
<h1>Спасибо за заказ</h1>
<div>
    <p>Имя: <?php echo $name; ?></p>
    <p>Телефон: <?php echo $tel; ?></p>
    <p>Заказ №: <?php echo $orderId; ?></p>
    <a href="/">Вернуться на главную</a><br><br>
    <form action="updateOrder.php" method="post">
        <input type="hidden" name="goodID" value="152578">
        <input type="hidden" name="price" value="99">
        <button>Добавить товар</button>
    </form>
    <form action="updateOrder.php" method="post">
        <input type="hidden" name="goodID" value="158208">
        <input type="hidden" name="price" value="4900">
        <button>Добавить товар</button>
    </form>
</div>
<div>
    <h3>Информация о заказе:</h3>
    <?php if (empty($orderData)): ?>
        <p>Нет информации</p>
    <?php else: ?>
        <ol>
            <?php foreach ($orderData as $key => $value): ?>
                <li>Заказ №: <?php echo $key ?></li>
                <?php foreach ($value as $itemName => $itemValue): ?>
                    <li><?php echo "{$itemName}: {$itemValue}" ?></li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?>
</div>
</body>
</html>