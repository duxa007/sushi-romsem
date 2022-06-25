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
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/style-content.css">
</head>
<body class="body">
<div class="general">
  <div class="content">
      <?php
        include './inc/content-nav.php' ;
      ?>
    <div class="basket-mobile">
      <div class="basket-empty__map">
          <?php
            include './inc/basket-desktop-empty.php' ;
          ?>
<!--          --><?php
//              include './inc/basket-desktop.php' ;
//          ?>
        <div class="map-desktop">
        <?php
            include './inc/map-desktop-empty.php' ;
        ?>
<!--        --><?php
//            include './inc/map-desktop.php' ;
//        ?>
      </div>
        <?php
            include './inc/footer.php' ;
        ?>
    </div>
  </div>
</div>
</body>


</html>