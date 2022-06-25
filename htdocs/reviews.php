<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style-main.css">
    <link rel="stylesheet" href="style/style-card.css">
    <link rel="stylesheet" href="style/style-text.css">
    <link rel="stylesheet" href="style/style-basket.css">
    <link rel="stylesheet" href="style/style-content.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/reviews.css">
</head>
<body class="body">
<div class="general">
    <?php
        include './inc/menu.php' ;
    ?>
    <div class="content">
        <?php
            include './inc/content-nav.php' ;
        ?>
            <div class="reviews__nav">
                <p class="reviews__nav-title">Отзывы</p>
                <a class="reviews__button__top" href="*#">+ Добавить отзыв</a>
            </div>
            <div class="reviews">
                <div class="reviews__top">
                    <p class="reviews__name">Розалия</p>
                    <p class="reviews__date">02.24.21</p>
                </div>
                <p class="reviews__text">Ваша доставка и ваши блюда лучшие в Харькове!) всегда очень вкусно, вовремя, всегда вежливые курьеры и девушки на телефоне</p>
            </div>
            <div class="reviews">
                <div class="reviews__top">
                    <p class="reviews__name">Елена</p>
                    <p class="reviews__date">02.24.21</p>
                </div>
                <p class="reviews__text">Ооочень вкусно!!!!!</p>
            </div>
            <div class="reviews">
                <div class="reviews__top">
                    <p class="reviews__name">Сергей Гаврилюк</p>
                    <p class="reviews__date">02.24.21</p>
                </div>
                <p class="reviews__text">Заказываем у Вас больше 2 -ух лет, были разные ситуации, но сервис стал лучше, суши вкуснее. За доставку сегодня на время, огромное спасибо, точь-в-точь в минута в минуту. Успехов Вам и приятных бонусов нам )</p>
            </div>
            <div class="reviews__button-container"><a class="reviews__button__bottom" href="*#">+ Добавить отзыв</a></div>
            <div class="content-line"></div>
            <?php
                include './inc/content-footer.php' ;
            ?>
        </div>
    <div class="order-wrapper">
        <div class="order">
            <?php
                include './inc/basket-desktop-empty.php' ;
            ?>
<!--            --><?php
//                include './inc/basket-desktop.php' ;
//            ?>
            <div class="map">
            <?php
                include './inc/map-desktop-empty.php' ;
            ?>
<!--            --><?php
//                include './inc/map-desktop.php' ;
//            ?>
            </div>
        </div>
    </div>
    <?php
        include './inc/footer.php' ;
    ?>
    </div>
</body>
</html>