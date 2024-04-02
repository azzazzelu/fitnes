<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
<?php include_once('./header_and_footer/header.php')?>
<main>
<div class="container">
    <form class="form" method="post" action="./back/sign_in.php">
    <h2 class="title_sign">Вход</h2>
    <?php
        if ($_SESSION['message']) {
          echo   $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Войти</button>
    </form>
    </div>
</main>
<?php include_once('./header_and_footer/footer.php')?>
</body>
</html>