<?php
require_once "adminApi/Good.php";
//session_start();
//$results = $_SESSION['results'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Получение информации о проекте</h3>
    <?php if (empty($results)): ?>
        <form action="projectInfo.php">
            <button id="data-project">Загрузить информацию о проекте</button>
        </form><br><br>
    <?php else: ?>
        <?php foreach($results as $key => $value): ?>
            <h4>Проект: <?php echo $key; ?></h4>
            <ol>
                <?php foreach($value as $itemName => $itemValue): ?>
                    <li><?php echo "{$itemName}: {$itemValue}" ?></li>
                <?php endforeach; ?>
            </ol><br><br>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="sendOrder.php" method="post">
        <input class="field" name="user_name" type="text" placeholder="Введите ваше имя" required>
        <input class="field" name="user_phone" type="tel" placeholder="Введите ваш телефон" required>
        <button class="button-m" name="send_user">Заказать со скидкой</button>
    </form>
</body>
</html>