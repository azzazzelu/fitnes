<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
<?php include_once('./header_and_footer/header.php')?>
<main>
<div class="container">
<h2 class="title_basket">Корзина</h2>
<div class="border">
    <table class="basket">
    <thead>
            <tr>
                <th></th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Удалить</th>
            </tr>
        </thead>
<?php 
require_once './back/connect.php';
if (isset($_SESSION['cart'])) {
    $Price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $id = $item['id'];

        $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
        while ($row = mysqli_fetch_assoc($product)) {
            $Price += $row['price'];
?>
       
        <tbody>
            <tr>
                <td></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['price']?> ₽</td>
                <td>1</td>
                <td><a href="./back/del_item_cart.php?delete=<?php echo $row['id']?>"><img width="40" height="50" src="./svg/bin.svg" alt=""></a></td>
            </tr>
        </tbody>
    
<?php
}
}
}
 ?>
 </table>
</div>
 <?php if ($Price == 0) {
    echo "<h2 class=\"title_sign\" style=\"margin:250px auto;\">Корзина Пуста</h2>";
} else { ?>
 <form class="form" style="margin: 100px auto;" method="post" action="">
    <label>Имя:</label>
    <input type="text">
    <label>Email:</label>
    <input type="email">
    <label>Номер телефона:</label>
    <input type="text">
    <label>Цена Заказа: <?php echo $Price?> ₽</label>
    <button>Оформить заказ</button>
 </form>
 <?php }?>
</div>
</main>
<?php include_once('./header_and_footer/footer.php')?>
</body>
</html>