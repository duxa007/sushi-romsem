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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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
                <div class="swiper swiper1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="content-main__carousel-block">
                                <img class="content-main__carousel" src="png/carousel-top.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-main__carousel-block">
                                <img class="content-main__carousel" src="png/carousel-top.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-main__carousel-block">
                                <img class="content-main__carousel" src="png/carousel-top.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-main__carousel-block">
                                <img class="content-main__carousel" src="png/carousel-top.png">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="content-main__carousel-block">
                                <img class="content-main__carousel" src="png/carousel-top.png">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination swiper-pagination1"></div>
                </div>
                <div class="content-main__menu">
                    <div class="content-main__chicken">
                        <img class="content-main__img" src="png/chicken.png" alt="">
                        <a href="../products.php" class="content-main__text">??????????</a>
                    </div>
                    <div class="content-main__eel">
                        <img class="content-main__img" src="png/eel.png" alt="">
                        <a href="../products.php" class="content-main__text">?? ??????????</a>
                    </div>
                    <div class="content-main__corn-dog">
                        <img class="content-main__img" src="png/corn-dog.png" alt="">
                        <a href="../products.php" class="content-main__text">???????? ??????</a>
                    </div>
                    <div class="content-main__pizza">
                        <img class="content-main__img" src="png/pizza.png" alt="">
                        <a href="../products.php" class="content-main__text">??????????</a>
                    </div>
                    <div class="content-main__stocks">
                        <img class="content-main__img" src="png/stocks.png" alt="">
                        <a href="../products.php" class="content-main__text">??????????</a>
                    </div>
                    <div class="content-main__pizza-mini">
                        <img class="content-main__img-mini" src="png/pizza-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">??????????</a>
                    </div>
                    <div class="content-main__set-mini">
                        <img class="content-main__img-mini" src="png/set-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">????????</a>
                    </div>
                    <div class="content-main__wok-mini">
                        <img class="content-main__img-mini" src="png/wok-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">WOK</a>
                    </div>
                    <div class="content-main__roles-mini">
                        <img class="content-main__img-mini" src="png/roles-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">??????????</a>
                    </div>
                    <div class="content-main__sushi-mini">
                        <img class="content-main__img-mini" src="png/sushi-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">????????</a>
                    </div>
                    <div class="content-main__soup-mini">
                        <img class="content-main__img-mini" src="png/soup-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">????????</a>
                    </div>
                    <div class="content-main__salad-mini">
                        <img class="content-main__img-mini" src="png/salad-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">????????????</a>
                    </div>
                    <div class="content-main__water-mini">
                        <img class="content-main__img-mini" src="png/water-mini.png" alt="">
                        <a href="../products.php" class="content-main__text-top">??????????????</a>
                    </div>
                    <div class="content-main__kombo-mini">
                        <img class="content-main__img-mini" src="png/kombo-mini.png" alt="">
                        <a href="../products.php"  class="content-main__text">??????????</a>
                    </div>
                </div>
            </div>
            <div class="content-compilation">
                <div class="content-compilation__text">
                    <a href="#*" class="content-compilation__text__link">??????????????</a>
                    <a href="#*" class="content-compilation__text__link">????????????????????</a>
                </div>
                <div class="content-compilation__card">
                    <img class="content-compilation__card__arrow-l" src="svg/arrow-l.svg">
                    <div class="swiper swiper2">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card card1">
                                    <img class="card__img" src="png/card1.png">
                                    <p class="card__title">?????????????? ??????</p>
                                    <p class="card__subtitle">1050 ??????????, 30 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1500 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card2.png">
                                    <p class="card__title">?????????????????????? ?? <br>???????????? ??????</p>
                                    <p class="card__subtitle">1260 ??????????, 36 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1150 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card3.png">
                                    <p class="card__title">?????????? ?????????????? <br>??????????????????????</p>
                                    <p class="card__subtitle">2050 ??????????, 45 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">2100 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card1">
                                    <img class="card__img" src="png/card1.png">
                                    <p class="card__title">?????????????? ??????</p>
                                    <p class="card__subtitle">1050 ??????????, 30 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1500 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card2.png">
                                    <p class="card__title">?????????????????????? ?? <br>???????????? ??????</p>
                                    <p class="card__subtitle">1260 ??????????, 36 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1150 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card3.png">
                                    <p class="card__title">?????????? ?????????????? <br>??????????????????????</p>
                                    <p class="card__subtitle">2050 ??????????, 45 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">2100 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card1">
                                    <img class="card__img" src="png/card1.png">
                                    <p class="card__title">?????????????? ??????</p>
                                    <p class="card__subtitle">1050 ??????????, 30 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1500 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card2.png">
                                    <p class="card__title">?????????????????????? ?? <br>???????????? ??????</p>
                                    <p class="card__subtitle">1260 ??????????, 36 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">1150 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card__img" src="png/card3.png">
                                    <p class="card__title">?????????? ?????????????? <br>??????????????????????</p>
                                    <p class="card__subtitle">2050 ??????????, 45 ????????????????</p>
                                    <div class="card__footer">
                                        <p class="card__price">2100 ??????</p>
                                        <a href="../product-card.php"> <button class="card__button">????????!</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="content-compilation__card__arrow-r" src="svg/arrow-r.svg">
                </div>
            </div>
            <?php
                include './inc/content-text.php' ;
            ?>
            <div class="content-button">
                <a class="content-button__link" href="*#">?????????????????? <img src="svg/arrow-down.svg"></a>
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
    <script>
        const swiper1 = new Swiper('.swiper1', {
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination1',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        var swiper2 = new Swiper(".swiper2", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination2",
                clickable: true,
            },
            navigation: {
                nextEl: '.content-compilation__card__arrow-r',
                prevEl: '.content-compilation__card__arrow-l',
            },
        });
    </script>
</body>
</html>