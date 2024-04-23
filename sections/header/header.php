<?php
require_once("adminpanel/php/getDataBrand.php");
session_start();
$currentDate = date('Y-m-d');
$categoryList = mysqli_fetch_all($categories);

?>


<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <a href="/" class="header__logo">BelBrands</a>
            <nav class="header__items">
                <ul>
                    <li><a href="/index.php">Главная</a></li>
                    <li><a href="/catalog.php">Каталог</a></li>
                    <li><a href="/brands.php">Бренды</a></li>
                </ul>
            </nav>
            <div class="header__controls">
                <a href="../adminpanel/index.php" class="header__control">
                    <img src="/static/icons/account.svg" alt="">
                </a>
                <a href="#" class="header__control">
                    <img src="/static/icons/cart.svg" alt="">
                </a>
                <a href="#" class="header__control">
                    <img src="/static/icons/search.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</header>