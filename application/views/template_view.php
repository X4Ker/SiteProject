<!DOCTYPE html>
<html lang="ru">
<head>
    <ul id="nav">
        <li><a href="/main">Главная</a></li>
        <li><a href="/portfolio">О нас</a></li>
        <li><a href="/examples">Наши работы</a></li>
        <li><a href="/config">Конфигуратор сайтов</a></li>
        <li><a href="/contacts">Контакты</a></li>
        <li><a href="#">Вход</a></li>
    </ul>
    <link href="/css/style.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Главная</title>
</head>
<body id="mask">
<div>
<?php include 'application/views/'.$content_view; ?>
</div>
</body>
</html>
