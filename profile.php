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
    <script src="js/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="header_shapka">
        <a href="index.php" class="header_logo">Sciberium</a>
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
    <div class="background" style="background-image: url('/img/background3.png');">
        <div class="background_items_second">

            <div class="profiles_box">
                <div class="profiles_avatar"></div>
                <div class="profiles_info">
                    <div class="profiles_name" style="text-align: center; font-size:36px;">
                        <?php
                        if (!isset($_SESSION['user'])) {
                            session_start();
                        }
                        echo $_SESSION['user']; ?></div>
                    <div class="profiles_phone" style="margin-left: 60px;">
                        <p>Ваш телефон - <?php
                                            if (!isset($_SESSION['user'])) {
                                                session_start();
                                            }
                                            echo $_SESSION['phone']; ?></p>
                    </div>
                    <div class="profiles_email" style="margin-left: 60px;">
                        <p>Ваша почта - <?php
                                        if (!isset($_SESSION['user'])) {
                                            session_start();
                                        }
                                        echo $_SESSION['email']; ?></p>
                    </div>
                    <form action="leave_user.php" style="margin-left: 60px;">
                        <button type="submit" class="register_btn">Выйти с аккаунта</button>
                    </form>
                </div>

            </div>

        </div>
    </div>

</main>

<footer>
</footer>

</html>