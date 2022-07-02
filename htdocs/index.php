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
    <link rel="stylesheet" href="style/product-card.css">
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
            <div class="content-main">
                <div class="content-main__carousel-block"><img class="content-main__carousel" src="png/carousel-top.png"></div>
                <div class="content-main__menu">
                    <div class="content-main__chicken">
                        <img class="content-main__img" src="png/chicken.png" alt="">
                        <a href="../products.php" class="content-main__text">Чикен</a>
                    </div>
                    <div class="content-main__eel">
                        <img class="content-main__img" src="png/eel.png" alt="">
                        <a href="../products.php" class="content-main__text">С угрем</a>
                    </div>
                    <div class="content-main__corn-dog">
                        <img class="content-main__img" src="png/corn-dog.png" alt="">
                        <a href="../products.php" class="content-main__text">Корн дог</a>
                    </div>
                    <div class="content-main__pizza">
                        <img class="content-main__img" src="png/pizza.png" alt="">
                        <a href="../products.php" class="content-main__text">Пицца</a>
                    </div>
                    <div class="content-main__stocks">
                        <img class="content-main__img" src="png/stocks.png" alt="">
                        <a href="../products.php" class="content-main__text">Акции</a>
                    </div>
                    <div class="content-main__pizza-mini">
                        <img class="content-main__img-mini" src="png/pizza-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Пицца</a>
                    </div>
                    <div class="content-main__set-mini">
                        <img class="content-main__img-mini" src="png/set-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Сеты</a>
                    </div>
                    <div class="content-main__wok-mini">
                        <img class="content-main__img-mini" src="png/wok-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">WOK</a>
                    </div>
                    <div class="content-main__roles-mini">
                        <img class="content-main__img-mini" src="png/roles-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Роллы</a>
                    </div>
                    <div class="content-main__sushi-mini">
                        <img class="content-main__img-mini" src="png/sushi-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Суши</a>
                    </div>
                    <div class="content-main__soup-mini">
                        <img class="content-main__img-mini" src="png/soup-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Супы</a>
                    </div>
                    <div class="content-main__salad-mini">
                        <img class="content-main__img-mini" src="png/salad-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Салаты</a>
                    </div>
                    <div class="content-main__water-mini">
                        <img class="content-main__img-mini" src="png/water-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">Напитки</a>
                    </div>
                    <div class="content-main__kombo-mini">
                        <img class="content-main__img-mini" src="png/kombo-mini.png" alt="">
                        <a href="../products.php"  class="content-main__text">Комбо</a>
                    </div>
                </div>
            </div>
            <div class="content-compilation">
                <div class="content-compilation__text">
                    <a href="#*" class="content-compilation__text__link">Новинки</a>
                    <a href="#*" class="content-compilation__text__link">Популярное</a>
                </div>
                <div class="content-compilation__card">
                    <img class="content-compilation__card__arrow-l" src="svg/arrow-l.svg">
                    <div class="card card1">
                        <img class="card__img" src="png/card1.png">
                        <p class="card__title">Саломон сет</p>
                        <p class="card__subtitle">1050 грамм, 30 кусочков</p>
                        <div class="card__footer">
                            <p class="card__price">1500 СОМ</p>
                            <a href="../product-card.php"> <button class="card__button">Хочу!</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card__img" src="png/card2.png">
                        <p class="card__title">Филадельфия и <br>лосось сет</p>
                        <p class="card__subtitle">1260 грамм, 36 кусочков</p>
                        <div class="card__footer">
                            <p class="card__price">1150 СОМ</p>
                            <a href="../product-card.php"> <button class="card__button">Хочу!</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card__img" src="png/card3.png">
                        <p class="card__title">Самая большая <br>Филадельфия</p>
                        <p class="card__subtitle">2050 грамм, 45 кусочков</p>
                        <div class="card__footer">
                            <p class="card__price">2100 СОМ</p>
                            <a href="../product-card.php"> <button class="card__button">Хочу!</button></a>
                        </div>
                    </div>
                    <img class="content-compilation__card__arrow-r" src="svg/arrow-r.svg">
                </div>
            </div>
            <?php
                include './inc/content-text.php' ;
            ?>
            <div class="content-button">
                <a class="content-button__link" href="*#">Подробнее <img src="svg/arrow-down.svg"></a>
            </div>
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
<!--                --><?php
//                    include './inc/basket-desktop.php' ;
//                ?>
                <div class="map">
                    <?php
                        include './inc/map-desktop-empty.php' ;
                    ?>
<!--                    --><?php
//                        include './inc/map-desktop.php' ;
//                    ?>
                </div>
            </div>
        </div>
        <?php
            include './inc/footer.php' ;
        ?>
    </div>
</body>
</html>