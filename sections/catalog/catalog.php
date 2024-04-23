<?php
require_once("adminpanel/php/connect.php");

$data_query_products = mysqli_query($conn, "SELECT * FROM `products`");


?>


<section class="catalog">
    <div class="container">
        <div class="catalog__wrapper">
            <h2 class="catalog__title">
                Популярные товары
            </h2>
            <div class="catalog__items">
                <?
$products = mysqli_fetch_all($data_query_products);

for ($i = 0; $i < 3; $i++) {
    $product = $products[$i];
?>
                <div class="catalog__item">
                    <a href="/product-page.php?id=<?=$product[0]?>" class="catalog__link"></a>
                    <div class="catalog__item-img-wrapper">
                        <img src="<?=$product[6]?>" alt="">
                    </div>
                    <div class="catalog__item-text">
                        <p class="catalog__itme-category">
                            <?=$product[2]?>
                        </p>
                        <p class="catalog__item-name">
                            <?=$product[1]?>
                        </p>
                        <span class="catalog__item-price"><span>Цена: </span> <?=$product[4]?> <?=$product[5]?></span>
                    </div>
                </div>
                <?}?>

            </div>

            <a href="/catalog.php" class="btn" style="color:white;">
                Показать больше
            </a>
        </div>
    </div>
</section>