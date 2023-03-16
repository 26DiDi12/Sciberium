<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sciberium</title>
    <link rel="shortcut icon" href="img/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/NunitoSans.css">
    <script src="js/script.js" defer></script>
    <script src="js/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="header_shapka">
        <a href="index.php" class="header_logo" style="border-bottom: 1px solid white;">Sciberium</a>
        <div class="header_items">
            <div class="header_item">
                <a href="" style="color: white;">Язык</a>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="catalog.php" style="color: white;">Продукты</a>
                    <div class="products_menu"></div>
                    <div class="products_menu_box">
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Viewer.php" style="color: black;">Sciberia Viewer</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/PACS.php" style="color: black;">Sciberia PACS</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Lungs.php" style="color: black;">Sciberia Lungs</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Head.php" style="color: black;">Sciberia Head</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <a href="" style="color: white;">О нас</a>
            </div>
            <div class="header_item">
                <a href="" style="color: white;">Новости</a>
            </div>
        </div>

        <?php if (!isset($_SESSION['user'])) {
            session_start();
        }
        if (isset($_SESSION['user'])) if ($_SESSION['user'] != 'Гость') { ?>
            <a href="profile.php" class="avatar-btn">
                <div class="avatar_name"><?php
                                            echo $_SESSION['user'];
                                            ?></div>
                <img src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } else { ?>
            <a href="register.php" class="avatar-btn">
                <div class="avatar_name"><?php
                                            echo $_SESSION['user']; ?></div>
                <img src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } ?>

    </div>

</body>

<main>

    <div class="head"></div>
    <div class="background">
        <div class="background_items">
            <img src="/img/logo2.svg" alt="">
            <p style="font-size: 40px;">ООО "Сайберия" - компания-разработчик программного обеспечения медицинского назначения.</p>
            <p style="font-size: 28px;">Основными продуктами являются профессиональные инструменты для врачей-рентгенологов и модули обработки медицинских изображений, использующие методы компьютерного зрения и машинного обучения.</p>
        </div>
    </div>
    <div class="background_two">
        <div class="background_two_items">
            <div class="background_two_item"><img src="/img/kaif.png" alt="">
                <div style="font-size: 48px;">Точно</div>
                <p style="font-size: 32px;">Стандартизации всех документов продукта</p>
            </div>
            <div class="background_two_item"><img src="/img/kaif.png" alt="">
                <div style="font-size: 48px;">Точно</div>
                <p style="font-size: 32px;">Стандартизации всех документов продукта</p>
            </div>
            <div class="background_two_item"><img src="/img/kaif.png" alt="">
                <div style="font-size: 48px;">Точно</div>
                <p style="font-size: 32px;">Стандартизации всех документов продукта</p>
            </div>
        </div>
    </div>

</main>

<footer>
</footer>

</html>