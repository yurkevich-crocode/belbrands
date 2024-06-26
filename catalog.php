<?php
require_once("adminpanel/php/connect.php");

$data_query_products = mysqli_query($conn, "SELECT * FROM `products`");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BelBrands</title>
    <link rel="stylesheet" href="/style/style.css" />

</head>

<body>
    <?php include "sections/header/header.php" ?>
    <main>
        <section class="catalog-page">
            <div class="container">
                <div class="catalog-page__wrapper">
                    <h2>Каталог товаров</h2>
                    <div class="catalog-page__items">
                        <?
                          $products = mysqli_fetch_all($data_query_products);

                          foreach($products as $product){
                 ?>
                        <div class="catalog__item">
                            <a href="/product-page.php?id=<?= $product[0] ?>" class="catalog__link"></a>
                            <div class="catalog__item-img-wrapper">
                                <img src="<?= $product[6] ?>" alt="">
                            </div>
                            <div class="catalog__item-text">
                                <p class="catalog__itme-category">
                                    <?= $product[2] ?>
                                </p>
                                <p class="catalog__item-name">
                                    <?= $product[1] ?>
                                </p>
                                <span class="catalog__item-price"><span>Цена: </span> <?= $product[4] ?>
                                    <?= $product[5] ?></span>
                            </div>
                        </div>
                        <?}?>
                    </div>
                    <div class="catalog-page__breadcrumps">
                        <span class="catalog-page__breadcrumps-btn">
                            < </span>
                                <div class="catalog-page__breadcrumps-items">
                                    <span class="active-page">1</span>
                                    <span>2</span>

                                    <span>3</span>

                                    <span>...</span>

                                    <span>21</span>

                                </div>
                                <span class="catalog-page__breadcrumps-btn">
                                    > </span>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include "sections/footer/footer.php" ?>

</body>




</html>