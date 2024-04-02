<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог</title>
  <link rel="stylesheet" href="./style/index.css" />
  <link rel="stylesheet" href="./style/normalize.css" />
</head>

<body>
<?php include_once('./header_and_footer/header.php')?>
  <main>
    <div class="catalog">
      <div class="container">
        <h1>
          АБОНЕМЕНТЫ ONLINE
        </h1>
        <div class="ticket">
        <?php
            require_once './back/connect.php';
            $sql = "SELECT * FROM `products` ";
            $product = mysqli_query($connect, $sql);
            if (mysqli_num_rows($product) > 0) {
                while ($row = mysqli_fetch_assoc($product)) {
            ?>
          <div class="ticket_card">
        
            <div class="ticket_cont">
              <h1 class="title_ticket">
                <?php echo $row['name']?>
              </h1>
              <div class="price">
                <p class="price_tx">Ежемесячный платеж</p>
                <p class="price_p"><?php echo $row['price']?>₽</p>
              </div>
              <div class="enabled">
                <div class="enabled_k"><img src="./svg/mark.svg" alt="">
                  <p>6 недель онлайн-тренировок с Александром Благовым</p>
                </div>
                <div class="enabled_k"><img src="./svg/mark.svg" alt="">
                  <p>тренируйся в любое время и в любом месте: нужен только телефон и приложение Spirit</p>
                </div>
                <div class="enabled_k"><img src="./svg/mark.svg" alt="">
                  <p>функциональные и силовые тренировки на все группы мышц</p>
                </div>
                <div class="enabled_k"><img src="./svg/mark.svg" alt="">
                  <p>уже готовая программа тренировок без экстремальных нагрузок</p>
                </div>
                <div class="enabled_k"><img src="./svg/mark.svg" alt="">
                  <p>гарантированный результат за счёт сочетания силовой и функциональной нагрузок </p>
                </div>
              </div>
              <a href="./back/cart.php?id=<?php echo $row['id'] ?>" class="btn_ticket">купить</a>
           
            </div>
          </div>
          <?php
                }
            }
            ?>

        </div>
      </div>
    </div>
    <div class="loyalty">
      <div class="container">
        <h1>УРОВНИ ЛОЯЛЬНОСТИ</h1>
        <p>Чем чаще и дольше вы тренируетесь — тем выше уровень лояльности и <br> больше привилегий</p>
        <div class="loyalty_cont">

          <div class="loyalty_card">
            <img src="./img/loyalty_3.png" alt="">
            <h1>Знаток <span>Spirit.</span></h1>
            <h2>Тренируется от 1 до 4 месяцев
            </h2>
            <h2>+5 бонусов за посещение</h2>
          </div>

          <div class="loyalty_card">
            <img src="./img/loyalty_2.png" alt="">
            <h1>Амбассадор <span>Spirit.</span></h1>
            <h2>Тренируется от 5 до 8 месяцев</h2>
            <h2>+7 бонусов за посещение</h2>
          </div>

          <div class="loyalty_card">
            <img src="./img/loyalty_1.png" alt="">
            <h1>Легенда <span>Spirit.</span></h1>
            <h2>Тренируется более 9 месяцев</h2>
            <h2>+10 бонусов за посещение</h2>
          </div>

        </div>
      </div>
    </div>
  </main>
  <?php include_once('./header_and_footer/footer.php')?>
</body>

</html>