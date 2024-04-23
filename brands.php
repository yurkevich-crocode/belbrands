<?php
require_once("adminpanel/php/getDataBrand.php");

$data_query = mysqli_query($conn, "SELECT * FROM `brand_with_category`");

$categories = mysqli_query($conn,  "SELECT * FROM `category`");

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
        <section class="brands-page">
            <div class="container">
                <div class="brands-page__wrapper">
                    <h2>Каталог товаров</h2>
                    <div class="brands-page__items">
                        <?php
              
              $brands = mysqli_fetch_all($data_query);
              foreach($brands as $brand){
              ?>
                        <div class="catalog__item">
                            <a href="/brand-page.php?id=<?=$brand[0]?>" class="catalog__link"></a>
                            <div class="catalog__item-img-wrapper">
                                <img src="adminpanel/<?=$brand[4]?>" alt="">
                            </div>
                            <div class="catalog__item-text">
                                <p class="catalog__itme-category">
                                    <?=$brand[5]?>
                                </p>
                                <p class="catalog__item-name">
                                    <?=$brand[1]?>
                                </p>
                            </div>
                        </div>

                        <?}?>
                    </div>
                    <div class="brands-page__breadcrumps">
                        <span class="brands-page__breadcrumps-btn">
                            < </span>
                                <div class="brands-page__breadcrumps-items">
                                    <span class="active-page">1</span>
                                    <span>2</span>

                                    <span>3</span>

                                    <span>...</span>

                                    <span>21</span>

                                </div>
                                <span class="brands-page__breadcrumps-btn">
                                    > </span>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include "sections/footer/footer.php" ?>

</body>




</html>