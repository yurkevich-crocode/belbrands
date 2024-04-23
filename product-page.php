<?php
require_once("adminpanel/php/connect.php");
$id = $_GET['id'];


if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $data_query_product = mysqli_query($conn, "SELECT * FROM `products` WHERE `products`.`id` = '$id'");

    $data = mysqli_fetch_all($data_query_product);

   
}



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
        <section class="product-page">
            <div class="container">
                <div class="product-page__wrapper">
                    <div class="product-page__images">
                        <div class="product-page__img">
                            <img src="<?=$data[0][6]?>" alt="">
                        </div>
                        <div class="product-page__images-second">

                            <div class="product-page__img-second">
                                <img src="/static/images/brands.jpg" alt="">
                            </div>
                            <div class="product-page__img-second">
                                <img src="/static/images/minsk.jpg" alt="">
                            </div>
                            <div class="product-page__img-second">
                                <img src="/static/images/hero.jpg" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="product-page__rightside">
                        <div class="product-page__text">
                            <h2>
                                <?=$data[0][1]?>
                            </h2>
                            <p class="product-page__category">
                                <span>Категория:</span>
                                <?=$data[0][2]?>
                            </p>

                            <p class="product-page__description">
                                <?=$data[0][3]?>
                            </p>
                            <span class="product-page__quantity">Осталось:
                                <span class="product-page__quantity-num"><?=$data[0][7]?> шт.</span>
                            </span>

                            <span class="product-page__price">Цена:
                                <span class="product-page__price-num">
                                    <?=$data[0][4]?> </span><?=$data[0][5]?></span>

                            <button class="btn">Добавить в корзину</button>


                            <div class="product-page__more">
                                <h2>Рейтинг</h2>

                                <div class="product-page__rating-wrapper">
                                    <div class="product-page__rating">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span>( <?=$data[0][8]?> из 5)</span>
                                </div>

                            </div>
                        </div>
                        <div class="product-page__reviews">
                            <h2>Отзывы</h2>
                            <div class="product-page__reviews-items">
                                <div class="product-page__review">
                                    <div class="product-page__review-name-wrapper">
                                        <p class="product-page__review-name">Пользователь. </p>
                                        <div class="product-page__review-rating-wrapper">
                                            <div class="product-page__review-rating">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-page__review-text">
                                        <p class="product-page__review-title">Великолепно!!!</p>
                                        <p>Очень крутой товар. Быстрая доставка, я остался доволен и счастлив. СПАСИБО
                                            !!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


    </main>
    <?php include "sections/footer/footer.php" ?>

</body>





</html>