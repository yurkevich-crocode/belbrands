<?php

require_once("php/getDataBrand.php");
session_start();
$currentDate = date('Y-m-d');
$categoryList = mysqli_fetch_all($categories);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="./css/main.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="favicon/favicon.ico" />
    <title>БелБренды | АдминПанель</title>
</head>

<body>
    <section class="header"></section>
    <div class="dashboard">
        <div class="dashboard__wrapper">
            <div class="dashboard__items">
                <a href="#" class="dashboard__logotype"><span class="dashboard__letter">Б</span> <span
                        class="dashboard__word">ел</span>
                    <span class="dashboard__letter">Б</span> <span class="dashboard__word">ренды</span></a>
                <div class="dashboard__list-items">
                    <a href="/adminpanel/brands.php" class="dashboard__list-item dashboard__list-item--active"><span
                            class="dashboard__icon-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="26"
                                class="dashboard__icon" viewBox="0 0 24 26" fill="#828282">
                                <path
                                    d="M12.198 0.63501C15.5683 0.63501 18.339 3.28335 18.4797 6.63908H18.4468C18.4508 6.73663 18.432 6.83376 18.3921 6.92289H18.5884C20.1189 6.92289 21.7215 7.98366 22.3641 10.5445L22.434 10.8466L23.4009 18.6369C24.0968 23.6056 21.3783 25.6951 17.6701 25.7836L17.4214 25.7865H6.99617C3.22753 25.7865 0.323493 24.4132 0.96201 18.9749L1.00555 18.6369L1.98361 10.8466C2.46589 8.08889 4.08498 7.00117 5.64502 6.92699L5.81805 6.92289H5.91636C5.89978 6.82901 5.89978 6.73296 5.91636 6.63908C6.057 3.28335 8.82779 0.63501 12.198 0.63501ZM8.54106 11.1097C7.92724 11.1097 7.42963 11.6219 7.42963 12.2537C7.42963 12.8854 7.92724 13.3976 8.54106 13.3976C9.15489 13.3976 9.65249 12.8854 9.65249 12.2537L9.64384 12.1102C9.57525 11.5461 9.10767 11.1097 8.54106 11.1097ZM15.8209 11.1097C15.2071 11.1097 14.7095 11.6219 14.7095 12.2537C14.7095 12.8854 15.2071 13.3976 15.8209 13.3976C16.4348 13.3976 16.9324 12.8854 16.9324 12.2537C16.9324 11.6219 16.4348 11.1097 15.8209 11.1097ZM12.1487 2.27286C9.72902 2.27286 7.76746 4.22768 7.76746 6.63908C7.78403 6.73296 7.78403 6.82901 7.76746 6.92289H16.5848C16.5498 6.83227 16.5312 6.73617 16.53 6.63908C16.53 4.22768 14.5685 2.27286 12.1487 2.27286Z" />
                            </svg> </span>Бренды </a><a href="/adminpanel/category.php"
                        class="dashboard__list-item"><span class="dashboard__icon-item"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" class="dashboard__icon" height="26"
                                viewBox="0 0 24 26" fill="#828282">
                                <path
                                    d="M17.3957 0.445068C21.2803 0.445068 23.4433 2.68355 23.4433 6.51916V19.5099C23.4433 23.4084 21.2803 25.5966 17.3957 25.5966H6.85592C3.03289 25.5966 0.806976 23.4084 0.806976 19.5099V6.51916C0.806976 2.68355 3.03289 0.445068 6.85592 0.445068H17.3957ZM7.19546 17.7242C6.81819 17.6864 6.45349 17.8625 6.25228 18.1895C6.05107 18.5039 6.05107 18.9189 6.25228 19.2458C6.45349 19.5602 6.81819 19.7489 7.19546 19.6986H17.0549C17.5566 19.6483 17.9352 19.2194 17.9352 18.7176C17.9352 18.202 17.5566 17.7745 17.0549 17.7242H7.19546ZM17.0549 11.9884H7.19546C6.65345 11.9884 6.21455 12.4298 6.21455 12.9705C6.21455 13.5113 6.65345 13.9514 7.19546 13.9514H17.0549C17.5956 13.9514 18.0358 13.5113 18.0358 12.9705C18.0358 12.4298 17.5956 11.9884 17.0549 11.9884ZM10.9544 6.2928H7.19546V6.30537C6.65345 6.30537 6.21455 6.74552 6.21455 7.28628C6.21455 7.82704 6.65345 8.26719 7.19546 8.26719H10.9544C11.4964 8.26719 11.9365 7.82704 11.9365 7.27245C11.9365 6.73295 11.4964 6.2928 10.9544 6.2928Z">
                                </path>
                            </svg> </span>Категории </a><a href="/adminpanel/users.php"
                        class="dashboard__list-item dashboard__list-item"><span class="dashboard__icon-item"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 50 50"
                                class="dashboard__icon" fill="#828282">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M33.3333 18.2501C33.2653 21.6529 30.4869 24.3757 27.0833 24.3751C23.7204 24.3197 21.0043 21.6128 20.9375 18.2501V15.8959C20.9371 14.5092 21.4964 13.181 22.4886 12.2123C23.4808 11.2436 24.822 10.7164 26.2083 10.7501H28.1667C29.535 10.7445 30.8493 11.2842 31.8188 12.2498C32.7883 13.2155 33.3333 14.5275 33.3333 15.8959V18.2501ZM26.1458 13.8126C24.9952 13.8126 24.0625 14.7453 24.0625 15.8959L24.1458 18.2501C24.1458 19.9184 25.4983 21.2709 27.1667 21.2709C28.835 21.2709 30.1875 19.9184 30.1875 18.2501V15.8959C30.1875 14.7453 29.2548 13.8126 28.1042 13.8126H26.1458Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M48.9167 31.8751L49.1458 35.1251C49.3866 36.1422 49.1515 37.2136 48.507 38.0365C47.8625 38.8594 46.8785 39.3443 45.8333 39.3542H36.4792C35.6631 40.2241 34.526 40.7211 33.3333 40.7292H20.8333C19.5804 40.746 18.3809 40.2222 17.5417 39.2917C17.3478 39.3132 17.1522 39.3132 16.9583 39.2917H7.39584C6.37912 39.2534 5.43162 38.7666 4.80837 37.9624C4.18511 37.1582 3.95013 36.1192 4.16667 35.1251L4.47917 31.8751C4.78318 30.3243 6.12835 29.1961 7.70834 29.1667H16.6667C17.0406 29.146 17.4151 29.1955 17.7708 29.3126C18.5701 28.3142 19.7836 27.7381 21.0625 27.7501H33.1042C34.3082 27.7456 35.4553 28.2622 36.25 29.1667C36.3951 29.1462 36.5424 29.1462 36.6875 29.1667H45.6875C47.2675 29.1961 48.6127 30.3243 48.9167 31.8751ZM36.5625 36.1667H46C46.0638 36.044 46.0714 35.8997 46.0209 35.7709V35.3542L45.8125 32.3959L45.6875 32.2292H36.75H36.25C35.3693 32.2324 34.5286 31.8613 33.9375 31.2084C33.7308 30.9612 33.4264 30.8166 33.1042 30.8126H21.0625C20.7135 30.817 20.3848 30.9776 20.1667 31.2501C19.572 31.956 18.6939 32.3607 17.7708 32.3542C17.3929 32.356 17.018 32.2852 16.6667 32.1459H7.81252C7.68752 32.1459 7.68752 32.1876 7.68752 32.3126L7.47918 35.2709V35.6876C7.42214 35.8133 7.42214 35.9576 7.47918 36.0834H17.0417C17.2634 36.063 17.4866 36.063 17.7083 36.0834C18.555 36.0991 19.3562 36.4695 19.9167 37.1042C20.1465 37.3732 20.4796 37.5322 20.8333 37.5417H33.4167C33.771 37.5349 34.1052 37.3754 34.3334 37.1042C34.9191 36.5032 35.7233 36.165 36.5625 36.1667Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M45.7708 21.375C45.7708 23.9063 43.7187 25.9584 41.1874 25.9584C39.9682 25.9639 38.7971 25.4835 37.933 24.6233C37.069 23.7632 36.5832 22.5942 36.5833 21.375V19.625C36.5833 18.6029 36.9893 17.6225 37.7121 16.8997C38.4349 16.1769 39.4152 15.7709 40.4374 15.7709H41.9166C44.0452 15.7709 45.7708 17.4964 45.7708 19.625V21.375ZM39.9218 19.1928C39.7851 19.3295 39.7083 19.515 39.7083 19.7084V21.4584C39.797 22.2022 40.4279 22.7623 41.177 22.7623C41.9261 22.7623 42.557 22.2022 42.6458 21.4584V19.7084C42.6458 19.3057 42.3193 18.9792 41.9166 18.9792H40.4374C40.244 18.9792 40.0586 19.056 39.9218 19.1928Z" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.4627 24.6233C14.5987 25.4835 13.4275 25.9639 12.2083 25.9584C10.9928 25.9584 9.82697 25.4755 8.96743 24.6159C8.10789 23.7564 7.625 22.5906 7.625 21.375V19.625C7.625 17.4964 9.35057 15.7709 11.4792 15.7709H12.9583C15.0869 15.7709 16.8125 17.4964 16.8125 19.625V21.375C16.8125 22.5942 16.3268 23.7632 15.4627 24.6233ZM11.4792 18.9792C11.0765 18.9792 10.75 19.3057 10.75 19.7084V21.4584C10.8387 22.2022 11.4696 22.7623 12.2187 22.7623C12.9679 22.7623 13.5988 22.2022 13.6875 21.4584V19.7084C13.6875 19.3057 13.361 18.9792 12.9583 18.9792H11.4792Z" />
                            </svg> </span>Пользователи</a>
                </div>
            </div>
            <a href="/adminpanel/index.php" class="dashboard__list-item dashboard__list-item--log"><span
                    class="dashboard__icon-item dashboard__list-item--log"><svg xmlns="http://www.w3.org/2000/svg"
                        width="31" height="31" viewBox="0 0 31 31" class="dashboard__icon" fill="#E5613E">
                        <path
                            d="M15.0439 2.78784C18.1659 2.78784 20.7121 5.29042 20.7121 8.37148V14.3953H13.035C12.4849 14.3953 12.0498 14.8228 12.0498 15.3636C12.0498 15.8918 12.4849 16.3319 13.035 16.3319H20.7121V22.3431C20.7121 25.4242 18.1659 27.9394 15.0183 27.9394H8.78707C5.65227 27.9394 3.10605 25.4368 3.10605 22.3557V8.38405C3.10605 5.29042 5.66507 2.78784 8.79987 2.78784H15.0439ZM23.9066 11.0252C24.2839 10.6354 24.9001 10.6354 25.2774 11.0126L28.9495 14.6722C29.1381 14.8608 29.2387 15.0998 29.2387 15.3639C29.2387 15.6154 29.1381 15.8669 28.9495 16.0429L25.2774 19.7025C25.0887 19.8911 24.8372 19.9917 24.5983 19.9917C24.3468 19.9917 24.0952 19.8911 23.9066 19.7025C23.5293 19.3252 23.5293 18.709 23.9066 18.3317L25.9187 16.3322H20.7124V14.3955H25.9187L23.9066 12.396C23.5293 12.0187 23.5293 11.4025 23.9066 11.0252Z" />
                    </svg> </span>Выйти</a>
        </div>
    </div>
    <main class="content">
        <section class="brands">
            <div class="container">
                <div class="brands__title-wrapper">
                    <h1 class="brands__title">Бренды</h1>
                    <button class="brands__add-btn">Добавить запись</button>
                    <div class="searchbar__wrapper">
                        <input name="search" id="search" class="searchbar__input" placeholder="Поиск по брендам" />
                    </div>
                </div>
                <div class="brands__wrapper">
                    <div class="brands__items">
                        <?php
              
              $brands = mysqli_fetch_all($data_query);

              foreach($brands as $brand){
              ?>
                        <div class="brands__item">
                            <span class="brands__item-id"><?=$brand[0]?></span>
                            <div class="brands__item-img-wrapper"><img src="<?=$brand[4]?>" class="brands__item-img" />
                            </div>
                            <div class="brands__item-wrapper">
                                <p class="brands__name"><?=$brand[1]?></p>
                                <div class="brands__control-wrapper">
                                    <span class="brands__control-btn btn-edit" data-id="<?=$brand[0]?>"
                                        data-name='<?=$brand[1]?>' data-history="<?=$brand[3]?>"
                                        data-date="<?=$brand[2]?>" data-img="<?=$brand[4]?>"
                                        data-category="<?=$brand[5]?>">
                                        <img src="./img/pencil.svg" alt="" class="brands__control-icon" />
                                    </span>
                                    <span class="brands__control-btn btn-delete" data-id="<?=$brand[0]?>">
                                        <img src="./img/trash.svg" alt="" class="brands__control-icon" />
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?}?>
                    </div>
                </div>
                <div class="brands__info">
                    <div class="brands__info-wrapper">
                        <span class="brands__cross"></span>
                        <form class="brands__form-inputs" action="php/updateBrand.php" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="idBrand" id="idBrand">
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Изображение:</span>
                                <div class="brands__detail-img-wrapper">
                                    <img src="../../img/2.jpeg" alt="" id="imagePreviewEdit"
                                        class="brands__detail-img" />
                                    <label for="editFile" class="brands__form-image-label"></label>
                                    <input type="file" name="editFile" id="editFile"
                                        accept=".png,.jpg,.jpeg,.svg,.webp" />
                                </div>
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Наименование бренда:</span>
                                <input name="nameEdit" id="nameEdit" class="brands__form-input" required />
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Категория бренда:</span>
                                <select name="categoryEdit" id="categoryEdit" class="brands__form-input" required>
                                    <?
                    foreach($categoryList as $category){
                    ?>
                                    <option value="<?=$category[0]?>"><?=$category[1]?></option>
                                    <?}?>
                                </select>

                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Дата основания:</span>
                                <input type="date" name="dateEdit" id="dateEdit" value="<??>" min="2001-04-20"
                                    max="<?=$currentDate?>" class="brands__form-input" required />
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">История:</span>
                                <textarea name="historyEdit" id="historyEdit" cols="30" rows="20"
                                    class="brands__form-input" required></textarea>
                            </div>
                            <button type="submit" class="brands__btn">Сохранить изменения</button>
                        </form>
                    </div>
                </div>
                <div class="brands__info-add">
                    <div class="brands__info-wrapper">
                        <span class="brands__cross brands__cross-add"></span>
                        <form class="brands__form-inputs" action="php/addBrand.php" method="post"
                            enctype="multipart/form-data">
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Изображение:</span>
                                <div class="brands__detail-img-wrapper">
                                    <img src="" alt="" class="brands__detail-img" id="imagePreviewAdd" />
                                    <label for="fileIMG" class="brands__form-image-label"></label>
                                    <input type="file" name="fileIMG" id="fileIMG" accept=".png,.jpg,.jpeg,.svg,.webp"
                                        required />
                                </div>
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Наименование бренда:</span>
                                <input name="name" id="name" placeholder="Наименование бренда"
                                    class="brands__form-input" required />
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Категория бренда:</span>
                                <select name="category" id="category" class="brands__form-input">
                                    <option value="default" selected="selected" required>Выберите категорию...</option>
                                    <?
                    echo $categoryList;
                    foreach($categoryList as $category){?>
                                    <option value="<?=$category[0]?>"><?=$category[1]?></option>
                                    <?}?>
                                </select>
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">Дата основания:</span>
                                <input type="date" name="date" id="date" min="2001-04-20" max="<?=$currentDate?>"
                                    class="brands__form-input" required />
                            </div>
                            <div class="brands__form-input-wrapper">
                                <span class="brands__form-input-label">История:</span>
                                <textarea name="history" id="history" cols="30" rows="20" class="brands__form-input"
                                    required></textarea>
                            </div>
                            <button type="submit" class="brands__btn">Добавить запись</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="footer"></section>
    <script src="js/main.min.js"></script>
</body>

</html>