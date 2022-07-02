<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style/order-registration.css">
    <link rel="stylesheet" href="style/style-content.css">
    <link rel="stylesheet" href="style/style-basket.css">
    <link rel="stylesheet" href="style/footer.css">
</head>
<body class="body">
<div class="container">
    <div class="main">
        <nav class="nav">
            <div class="nav-back">
                <img class="nav-back__img" src="svg/back.svg">
                <a class="nav-back__text" href="../index.php">Продолжить выбор</a>
            </div>
            <div class="content-nav__logo__order">
                <a href="#*"><img class="content-nav__img" src="png/logo.png"></a>
            </div>
            <div class="nav__order">
                <div class="content-nav__number__order">
                    <p class="content-nav__number__top">Наш телефон</p>
                    <p class="content-nav__number__phone">+996 705 188 955</p>
                    <p class="content-nav__number__phone">+996 555 188 955</p>
                    <p class="content-nav__number__time"><img class="content-nav__number__time-img" src="svg/time.svg">работаем с 10:00 до 00:00</p>
                </div>
                <div class="content-nav__time">
                    <img class="content-nav__number__time-img" src="svg/time.svg">
                    <p class="content-nav__time">работаем</p>
                    <p class="content-nav__time">с 10:00 до 00:00</p>
                </div>
            </div>
            <div class="content-nav__logo__order">
                <a href="#*" class="content-nav__img"><img src="svg/search.svg"></a>
            </div>
            <div class="content-nav__basket__order">
                <a href="#*" class="content-nav__basket-img"><img src="svg/basket.svg"></a>
                <p class="content-nav__menu__text"><a class="content-nav__menu__link" href="#*">корзина</a></p>
            </div>
        </nav>
        <div class="order-block">
            <h3 class="order-block__title">Ваши данные</h3>
            <div class="order-table">
                <input class="input telephone" placeholder="Телефон" type="text">
                <input class="input name" placeholder="Имя" type="text">
                <div class="select-button select-button__top">
                    <div class="select-button__left">Курьером</div>
                    <div class="select-button__right">Самовывоз</div>
                </div>
                <div class="select-button select-button__middle">
                    <div class="select-button__left"> <img class="select-button__img" src="svg/money1.svg">Наличными</div>
                    <div class="select-button__right"> <img class="select-button__img" src="svg/money2.svg">Картой</div>
                </div>
                <input class="input street" placeholder="Улица" type="text">
                <input class="input home" placeholder="Дом" type="text">
                <div class="change">
                    <img class="change__img" src="svg/change.svg">
                    <p class="change__text">Подготовить сдачу с</p>
                    <input class="input change__input" placeholder="Сумма" type="text">
                </div>
                <input class="input-mini flat" placeholder="Квартира" type="text">
                <input class="input-mini entrance" placeholder="Подъезд" type="text">
                <input class="input-mini floor" placeholder="Этаж" type="text">
                <input class="input-mini code" placeholder="Код" type="text">
                <input class="input comment" placeholder="Комменатрий к заказу" type="text">
                <div class="select-button select-button__bottom">
                    <div class="select-button__left">На сейчас</div>
                    <div class="select-button__right">На время</div>
                </div>
                <div class="addition addition1">
                    <p class="addition__text">Палочки + соусник обычные</p>
                    <div class="addition-add">
                        <img class="addition-add__img" src="svg/less.svg" alt="">
                        <p class="addition-add__quantity">10</p>
                        <img class="addition-add__img" src="svg/more.svg" alt="">
                    </div>
                </div>
                <div class="addition addition2">
                    <p class="addition__text">Палочки + соусник обычные</p>
                    <div class="addition-add">
                        <img class="addition-add__img" src="svg/less.svg" alt="">
                        <p class="addition-add__quantity">10</p>
                        <img class="addition-add__img" src="svg/more.svg" alt="">
                    </div>
                </div>
                <input class="input email" placeholder="E-mail(необязательно)" type="text">
                <input class="input promo" placeholder="Введите промокод" type="text">
                <div class="button">
                    <a href="*#" class="button__link">Оформить заказ</a>
                </div>
            </div>
            <p class="offer">Нажимая на кнопку Оформить заказ, Вы подтверждаете свое согласие на обработку персональных данных в соответствии с
                <a href="#*" class="offer__link">Публичной оффертой</a></p>
            <div class="basket-total__order__mobile">
                <div class="basket-total__subtitle__mobile">
                    <p class="basket-total__subtitle-left__mobile">1 товар</p>
                    <p class="basket-total__subtitle-right__mobile">170 СОМ</p>
                </div>
                <div class="basket-total__subtitle__mobile">
                    <p class="basket-total__subtitle-left__mobile">Скидка</p>
                    <p class="basket-total__subtitle-right__mobile">0 СОМ</p>
                </div>
                <div class="basket-total__subtitle__mobile">
                    <p class="basket-total__subtitle-left__mobile">Доставка</p>
                    <p class="basket-total__subtitle-right__mobile">Бесплатно</p>
                </div>
                <div class="basket-total__subtitle__orange__mobile">
                    <p class="basket-total__subtitle-left__orange__mobile">Итого</p>
                    <p class="basket-total__subtitle-right__orange__mobile">170 СОМ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="basket-block">
        <div class="basket">
            <div class="basket-main">
                <p class="basket-main__title">Корзина</p>
            </div>
            <div class="basket-product">
                <img class="basket-product__img" src="png/salomon-set.png">
                <div class="">
                    <p class="basket-product__title">самая большая филадельфия</p>
                    <div class="basket-product__bottom">
                        <div class="basket-product__bottom-left">
                            <img class="basket-product__quantity-img" src="svg/less.svg" alt="">
                            <p class="basket-product__quantity">10</p>
                            <img class="basket-product__quantity-img" src="svg/more.svg" alt="">
                        </div>
                        <p class="basket-product__price">1150 СОМ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="basket-total__order">
            <div class="basket-total__subtitle">
                <p class="basket-total__subtitle-left">1 товар</p>
                <p class="basket-total__subtitle-right">170 СОМ</p>
            </div>
            <div class="basket-total__subtitle">
                <p class="basket-total__subtitle-left">Скидка</p>
                <p class="basket-total__subtitle-right">0 СОМ</p>
            </div>
            <div class="basket-total__subtitle">
                <p class="basket-total__subtitle-left">Доставка</p>
                <p class="basket-total__subtitle-right">Бесплатно</p>
            </div>
            <div class="basket-total__subtitle__orange">
                <p class="basket-total__subtitle-left__orange">Итого</p>
                <p class="basket-total__subtitle-right__orange">170 СОМ</p>
            </div>
        </div>
    </div>
    <?php
        include './inc/footer.php' ;
    ?>
</div>
</body>
</html>