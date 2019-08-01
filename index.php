<?php require_once 'HTML.php' ?>

<!DOCTYPE>
<html lang="ru">
<head>
    <title>MyInspire. Фотограф в Санкт-Петербурге.</title>
    <meta name="description" content="
        Атмосферные фото в Санкт-Петербурге от профессионального фотографа.
        Экспресс фотосессия от 2000р. Лавстори, фотопрогулка, студийная
        фотосессия и профессиональная ретушь ваших снимков.">
    <meta name="keywords" content="
        Фотограф СПБ, Фотограф Санкт-Петербург, Фотосессия СПБ, Фотосессия Санкт-Петербург,
        Love story СПБ, Love story Санкт-Петербург, Портрет СПБ, Портрет Санкт-Петербург,
        Съёмка СПБ, Съёмка Санкт-Петербург, Атмосферные фото">
    <?php include 'assets/elements/head.php' ?>
    <link rel="stylesheet" href="/home/home.css">
    <script>
        let collageNumber = <?= count(glob(__DIR__. "/home/photos/*")) / 2 ?>;
    </script>
    <script src="/home/home.js"></script>
</head>
<body>
<div class="loader main-loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<?php include('assets/elements/header.php') ?>
<div class="body container">
    <?php
    switch ($_SERVER['REQUEST_URI']) {
        case '/':
        case '/home/':
            include 'home/home.php';
            break;
        default:
            include 'fileNotFound.php';
            break;
    } ?>
</div>
<?php include 'assets/elements/footer.php' ?>
</body>
</html>