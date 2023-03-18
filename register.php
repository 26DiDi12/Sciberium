<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
} ?>
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
    <script src="js/script_regist.js" defer></script>
    <script src="js/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="header_shapka">
        <a href="index.php" class="header_logo">Sciberium</a>
        <div class="header_items">
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="https://sciberia.io/AboutUs" style="color: white;">Язык</a>
                    <div class="products_menu" style="margin-left: -75px;"></div>
                    <div class="products_menu_box" style="margin-left: -75px;">
                        <a href="https://sciberia.io/news" class="products_menu_num" style="height: 43%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Русский</div>
                        </a>
                        <a href="https://sciberia.io/news?section=mass-media" class="products_menu_num" style="height: 43%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Английский</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="catalog.php" style="color: white;">Продукты</a>
                    <div class="products_menu"></div>
                    <div class="products_menu_box">
                        <a href="products/Viewer.php" class="products_menu_num">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Sciberia Viewer</div>
                        </a>
                        <a href="products/PACS.php" class="products_menu_num">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Sciberia PACS</div>
                        </a>
                        <a href="products/Lungs.php" class="products_menu_num">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Sciberia Lungs</div>
                        </a>
                        <a href="products/Head.php" class="products_menu_num">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Sciberia Head</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="https://sciberia.io/AboutUs" style="color: white;">О нас</a>
                    <div class="products_menu" style="margin-left: -75px;"></div>
                    <div class="products_menu_box" style="margin-left: -75px;">
                        <a href="https://sciberia.io/news" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">All</div>
                        </a>
                        <a href="https://sciberia.io/news?section=mass-media" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Mass Media</div>
                        </a>
                        <a href="https://sciberia.io/news?section=press-releases" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Press release</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="" style="color: white;">Новости</a>
                    <div class="products_menu" style="margin-left: -65px;"></div>
                    <div class="products_menu_box" style="margin-left: -65px;">
                        <a href="https://sciberia.io/news" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">All</div>
                        </a>
                        <a href="https://sciberia.io/news?section=mass-media" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Mass Media</div>
                        </a>
                        <a href="https://sciberia.io/news?section=press-releases" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div class="ninja_panel_text">Press release</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php if (isset($_SESSION['user'])) if ($_SESSION['user'] != 'Гость') { ?>
            <a href="profile.php" class="avatar-btn">
                <div class="avatar_name">
                    <p><?php echo $_SESSION['user']; ?></p>
                </div>
                <img class="avatar_img" src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } else { ?>
            <a href="register.php" class="avatar-btn">
                <div class="avatar_name">
                    <p><?php echo $_SESSION['user']; ?></p>
                </div>
                <img class="avatar_img" src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } ?>

    </div>

</body>

<main>

    <div class="head"></div>
    <div class="background" style="background-image: url('/img/background3.png');">
        <div class="background_items_second">
            <div class="register_zone">
                <!-- <form class="register_box"> -->
                <form action="sign_user.php" class="register_box" method="POST">
                    <p id="register-title" style="font-size: 32px;">Регистрация</p>
                    <div style="margin-top: 120px;">
                        <div id="register_btn_num1" class="register_btn">Пользователь</div>
                        <div id="register_btn_num2" class="register_btn">Сотрудник</div>
                        <div id="register_btn_num3" class="register_btn">Организация</div>
                        <p>
                        <div id="register_btn_num4" class="login_btn">Уже есть аккаунт? (Войти)</div>
                        </p>
                        <div class="register_step_two">
                            <p><input name="name" maxlength=50 size=50 type="text" class="form-input" id="register_name" placeholder="Введите имя"></p>
                            <p><input name="email" maxlength=20 size=20 type="text" class="form-input" id="register_email" placeholder="Введите почту"></p>
                            <p><input name="phone" maxlength=10 size=10 type="text" class="form-input" id="register_phone" placeholder="Введите телефон"></p>
                            <p><input name="password" maxlength=20 size=20 type="text" class="form-input" id="register_pass" placeholder="Введите пароль"></p>
                            <div class="register_warn" id="register_result"></div>
                            <p><button type="submit" id='register_validate' class="form-btn">Зарегистрироваться</button></p>
                            <p><div id="register_btn_num5" class="login_btn">Уже есть аккаунт? (Войти)</div></p>
                        </div>
                    </div>
                </form>

                <form action="login_user.php" class="login_box" method="POST">
                    <p id="login-title" style="font-size: 32px; margin-top: 100px;">Войти</p>
                    <p><input name="email" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите почту"></p>
                    <p><input name="password" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите пароль"></p>
                    <p><button type="submit" class="form-btn">Войти</button></p>
                    <p>
                    <div id="login_btn_num6" class="login_btn">Нет аккаунта? (Зарегаться)</div>
                    </p>
                </form>
            </div>
        </div>
    </div>

</main>

<footer>
</footer>

</html>