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
    <link rel="stylesheet" href="style/style-product.css">
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
        <div class="content-product">
            <nav class="content-product__nav">
                <div class="content-product__nav-left">
                    <div class=""><img class="content-product__nav-img" src="svg/product-name.svg"></div>
                    <p class="content-product__nav-name">Сеты</p>
                </div>
                <div class="content-product__nav-right">
                    <div class="sort">
                        <div class="sort__main">
                            <p class="sort__main-title">Сортировка</p>
                            <div class="sort__main-subtitle">
                                <p class="sort__text">По умолчанию</p>
                                <img class="sort__main-img" src="svg/sort.svg">
                            </div>
                        </div>
                        <div class="sort__footer">
                            <p class="sort__text">По умолчанию</p>
                            <p class="sort__text">Название</p>
                            <p class="sort__text">Сначала дешевле</p>
                            <p class="sort__text">Сначала дороже</p>
                            <p class="sort__text">Количество кусочков</p>
                            <p class="sort__text">Вес</p>
                        </div>
                    </div>
                </div>
                <div class="sort-mini">
                    <div class="sort-mini__left">
                        <img class="sort-mini__left-img" src="svg/sort-mini-l.svg">
                        <p class="sort-mini__left-text">Сортировка</p>
                    </div>
                    <div class="sort-mini__right">
                        <img class="sort-mini__right-img" src="svg/sort-mini-r.svg">
                    </div>
                </div>
            </nav>
            <div class="content-product-grid">
                <div class="card">
                    <img class="card__img" src="png/salomon-set.png">
                    <div class="">
                        <p class="card__title">Саломон сет<span class="card__title__dop"></p>
                        <p class="card__subtitle">1050 грамм, 30 кусочков</p>
                        <div class="card__footer">
                            <p class="card__price">1500 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-5-pfil.png">
                    <div class="">
                        <p class="card__title">Сет "5 <span class="card__title__dop">Филадельфий"</p>
                        <p class="card__subtitle">1120 грамм 40 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1499 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-phil-and-losos.png">
                    <div class="">
                        <p class="card__title">Филадельфия и <span class="card__title__dop">лосось сет</p>
                        <p class="card__subtitle">1260 грамм, 36 кусочков</p>
                        <div class="card__footer">
                            <p class="card__price">1499 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-6-phil.png">
                    <div class="">
                        <p class="card__title">Сет "6 <span class="card__title__dop">Филадельфий"</p>
                        <p class="card__subtitle">1320 грамм 46 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1559 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/card2.png">
                    <div class="">
                        <p class="card__title">Топовый сет<span class="card__title__dop"></p>
                        <p class="card__subtitle">1020 грамм 40 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1519 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-kamikadze.png">
                    <div class="">
                        <p class="card__title">Камикадзе сет<span class="card__title__dop"></p>
                        <p class="card__subtitle">1200 грамм 52 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1469 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-4-phil.png">
                    <div class="">
                        <p class="card__title">Сет "4 <span class="card__title__dop">Филадельфии"</p>
                        <p class="card__subtitle">1100 грамм 32 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1559 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-phil-love.png">
                    <div class="">
                        <p class="card__title">Филадельфия LOVE <span class="card__title__dop">сет</p>
                        <p class="card__subtitle">1000 грамм 40 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1479 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card__img" src="png/set-yakyza.png">
                    <div class="">
                        <p class="card__title">Якудза сет<span class="card__title__dop"></p>
                        <p class="card__subtitle">1270 грамм 50 кусочек</p>
                        <div class="card__footer">
                            <p class="card__price">1499 СОМ</p>
                            <button class="card__button">Хочу!</button>
                        </div>
                    </div>
                </div>
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
            <!--              --><?php
//                include './inc/basket-desktop.php' ;
//              ?>
            <div class="map">
                <?php
                    include './inc/map-desktop-empty.php' ;
                ?>
<!--                  --><?php
//                    include './inc/map-desktop.php' ;
//                  ?>
            </div>
        </div>
    </div>
    <?php
        include './inc/footer.php' ;
    ?>
</div>
</body>
</html>