<?php session_start()?>
<header>
        <div class="hed_cont">
            <div class="logo">
                <a href="./index.php">
                    <img src="/svg/logo_white.svg" alt="Логотип" />
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="./index.php">Главная</a></li>
                    <li><a href="./about.php">О нас</a></li>
                    <li><a href="./catalog.php">Каталог</a></li>
                </ul>
            </nav>
            <?php
          if(!isset($_SESSION['user'])){
            echo "  <div class=\"button\">
            <a href=\"./signin.php\">Войти</a>
            <a href=\"./signup.php\">Регистрация</a>
        </div> ";
          }else{
                echo "<div class=\"button\">
                <a href=\"./back/logout.php\">Выйти</a>
                <a href=\"./basket.php\">Корзина</a>
            </div>";
            }
        ?>
        </div>
    </header>