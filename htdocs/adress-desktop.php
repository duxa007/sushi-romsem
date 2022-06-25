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
    <link rel="stylesheet" href="style/style-basket.css">
</head>
<div class="order">
    <?php
        include './inc/basket-desktop-empty.php' ;
    ?>
<!--    --><?php
//        include './inc/basket-desktop.php' ;
//    ?>
    <div class="map">
<!--    --><?php
//        include './inc/map-desktop-empty.php' ;
//    ?>
    <?php
        include './inc/map-desktop.php' ;
    ?>
    </div>
</div>
</div>
</html>