<?php
require_once("adminpanel/php/connect.php");
$id = $_GET['id'];


if(isset($_GET['id'])){
    $id =  $_GET['id'];
    $data_query_brand = mysqli_query($conn, "SELECT * FROM `brand_with_category` WHERE `brand_with_category`.`brand_id` = '$id'");

    $data = mysqli_fetch_all($data_query_brand);

   
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
        <section class="brand-page">
            <div class="container">
                <div class="brand-page__wrapper">
                    <div class="brand-page__images">
                        <div class="brand-page__img">
                            <img src="adminpanel/<?=$data[0][4]?>" alt="">
                        </div>
                        <!-- <div class="brand-page__images-second">

                            <div class="brand-page__img-second">
                                <img src="/static/images/brands.jpg" alt="">
                            </div>
                            <div class="brand-page__img-second">
                                <img src="/static/images/minsk.jpg" alt="">
                            </div>
                            <div class="brand-page__img-second">
                                <img src="/static/images/hero.jpg" alt="">
                            </div>
                        </div> -->
                    </div>


                    <div class="brand-page__rightside">
                        <div class="brand-page__text">
                            <h2>
                                <?=$data[0][1]?>
                            </h2>
                            <p class="brand-page__category">
                                <span>Категория:</span>
                                <?=$data[0][5]?>
                            </p>
                            <p class="brand-page__category">
                                <span>Дата основания:</span>
                                <?=$data[0][2]?>
                            </p>

                            <p class="brand-page__description">
                                <?=nl2br($data[0][3])?>
                            </p>






                            <div class="brand-page__more">
                                <h2>Рейтинг</h2>

                                <div class="brand-page__rating-wrapper">
                                    <div class="brand-page__rating">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span>(5 из 5)</span>
                                </div>

                            </div>
                        </div>
                        <div class="brand-page__reviews">
                            <h2>Отзывы</h2>
                            <div class="brand-page__reviews-items">
                                <div class="brand-page__review">
                                    <div class="brand-page__review-name-wrapper">
                                        <p class="brand-page__review-name">Пользователь. </p>
                                        <div class="brand-page__review-rating-wrapper">
                                            <div class="brand-page__review-rating">
                                                ⭐⭐⭐⭐⭐
                                            </div>
                                        </div>
                                    </div>
                                    <div class="brand-page__review-text">
                                        <p class="brand-page__review-title">Великолепно!!!</p>
                                        <p>Тестовый отзыв, статический</p>
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