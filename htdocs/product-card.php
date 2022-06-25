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
      <div class="content-card">
        <div class="content-card__nav">
          <div class="content-card__nav-left">
            <img src="svg/card-nav-l.svg">
            <p class="content-card__nav-text">Назад</p>
          </div>
          <div class="content-card__nav-right">
            <p class="content-card__nav-text">Вперед</p>
            <img src="svg/card-nav-r.svg">
          </div>
        </div>
        <div class="content-product-card">
          <div class="content-product-card__img">
            <img class="content-product-card__img" src="png/phil-and-losos-big.png" alt="" >
          </div>
          <div class="content-product-card__info">
            <p class="content-product-card__title">Филадельфия и <br> лосось сет</p>
            <p class="content-product-card__weight">290 грамм</p>
            <div class="content-product-card__number">
              <p class="content-product-card__price">1150 СОМ</p>
              <img class="content-product-card__quantity-img" src="svg/less.svg" alt="">
              <p class="content-product-card__quantity">10</p>
              <img class="content-product-card__quantity-img" src="svg/more.svg" alt="">
              <button class="content-product-card__button-mini">Хочу!</button>
            </div>
            <div class="content-product-card__structure">
              <p class="content-product-card__structure-title">Состав</p>
              <p class="content-product-card__structure-main">Лосось, сыр "Филадельфия", огурец, авокадо</p>
            </div>
            <button class="content-product-card__button">Хочу!</button>
            <div class="content-product-card__structure-mini">
              <p class="content-product-card__structure-mini-title">Состав сета</p>
              <div class="structure__block">
                <img class="structure__arrow" src="svg/arrow-mini-l.svg">
                <div class="structure__container">
                  <div class="structure structure1">
                    <img class="structure__img" src="png/sostav.png">
                    <p class="structure__title">Филадельфия</p>
                    <p class="structure__price">140 СОМ</p>
                  </div>
                  <div class="structure">
                    <img class="structure__img" src="png/sostav.png">
                    <p class="structure__title">Филадельфия</p>
                    <p class="structure__price">140 СОМ</p>
                  </div>
                  <div class="structure">
                    <img class="structure__img" src="png/sostav.png">
                    <p class="structure__title">Филадельфия</p>
                    <p class="structure__price">140 СОМ</p>
                  </div>
                </div>
                <img class="structure__arrow" src="svg/arrow-mini-r.svg">
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="recommend-title">Рекомендуем к этому товару</p>
      <div class="recommend__container">
        <img class="recommend__arrow" src="svg/arrow-mini-l.svg">
        <div class="recommend recommend1">
          <img class="recommend__img" src="png/recomend1.png">
          <p class="recommend__title">Филадельфия</p>
          <p class="recommend__price">140 СОМ <img class="recommend__plus" src="svg/plus.svg"</p>
        </div>
        <div class="recommend">
          <img class="recommend__img" src="png/recomend1.png">
          <p class="recommend__title">Филадельфия</p>
          <p class="recommend__price">140 СОМ <img class="recommend__plus" src="svg/plus.svg"</p>
        </div>
        <div class="recommend">
          <img class="recommend__img" src="png/recomend1.png">
          <p class="recommend__title">Филадельфия</p>
          <p class="recommend__price">140 СОМ <img class="recommend__plus" src="svg/plus.svg"</p>
        </div>
        <img class="recommend__arrow" src="svg/arrow-mini-r.svg">
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