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
    <script src="js/script_regist.js" defer></script>
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
                        <a href="products/Viewer.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia Viewer</div>
                        </a>
                        <a href="products/PACS.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia PACS</div>
                        </a>
                        <a href="products/Lungs.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia Lungs</div>
                        </a>
                        <a href="products/Head.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia Head</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <a href="https://sciberia.io/AboutUs" style="color: white;">О нас</a>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="catalog.php" style="color: white;">Новости</a>
                    <div class="products_menu" style="left: 1020px"></div>
                    <div class="products_menu_box" style="left: 1020px">
                        <a href="https://sciberia.io/news" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div style="color: black;">All</div>
                        </a>
                        <a href="https://sciberia.io/news?section=mass-media" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div style="color: black;">Mass Media</div>
                        </a>
                        <a href="https://sciberia.io/news?section=press-releases" class="products_menu_num" style="height: 26%;">
                            <img src="" alt="">
                            <div style="color: black;">Press release</div>
                        </a>
                    </div>
                </div>
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
            <div class="register_zone">
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
                            <p><input name="name" maxlength=50 size=50 type="text" class="form-input" placeholder="Введите ФИО"></p>
                            <p><input name="email" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите почту"></p>
                            <p><input name="phone" maxlength=11 size=11 type="text" class="form-input" placeholder="Введите телефон"></p>
                            <p><input name="password" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите пароль"></p>
                            <p><button type="submit" class="form-btn">Зарегистрироваться</button></p>
                            <p>
                            <div id="register_btn_num5" class="login_btn">Уже есть аккаунт? (Войти)</div>
                            </p>
                        </div>
                    </div>
                </form>

                <form action="login_user.php" class="login_box" method="POST">
                    <p id="login-title" style="font-size: 32px;">Войти</p>
                    <p><input name="name" maxlength=50 size=50 type="text" class="form-input" placeholder="Введите ФИО"></p>
                    <p><input name="email" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите почту"></p>
                    <p><input name="phone" maxlength=11 size=11 type="text" class="form-input" placeholder="Введите телефон"></p>
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