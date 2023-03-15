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
        <a href="index.php" class="header_logo">Sciberium</a>
        <div class="header_items">
            <div class="header_item">
                <a href="">Язык</a>
            </div>
            <!-- <div class="header_item">
                <a href="">Форум</a>
            </div> -->
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="catalog.php">Продукты</a>
                    <div class="products_menu"></div>
                    <div class="products_menu_box">
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Viewer.php">Sciberia Viewer</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/PACS.php">Sciberia PACS</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Lungs.php">Sciberia Lungs</a>
                        </div>
                        <div class="products_menu_num">
                            <img src="" alt="">
                            <a href="products/Head.php">Sciberia Head</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_item">
                <a href="">О нас</a>
            </div>
            <div class="header_item">
                <a href="">Новости</a>
            </div>
        </div>
        <div class="avatar-btn">
            <div class="avatar_name"><?php if (!isset($_SESSION)) {
                                            session_start();
                                        }
                                        echo $_SESSION['user'] ?></div>
            <img src="img/avatar.png" alt="" height="55px">
        </div>
    </div>

    <article class="window" id="profile_id">
        <div class="window_form">
            <div class="window_block reg-block">
                <div class="form-box">
                    <p class="form-input">Имя: <?php if (!isset($_SESSION)) {
                                                    session_start();
                                                }
                                                echo $_SESSION['user'] ?></p>
                    <p class="form-input">Почта: <?php if (!isset($_SESSION)) {
                                                        session_start();
                                                    }
                                                    echo $_SESSION['email'] ?></p>
                    <p class="form-input">Логин: <?php if (!isset($_SESSION)) {
                                                        session_start();
                                                    }
                                                    echo $_SESSION['login'] ?></p>
                    <p class="form-input">Пароль: <?php if (!isset($_SESSION)) {
                                                        session_start();
                                                    }
                                                    echo $_SESSION['pass'] ?></p>
                    <form action="redakt_user.php">
                        <button type="submit" class="form-btn">Изменить данные</button>
                    </form>
                    <form action="leave_user.php">
                        <button type="submit" class="form-btn">Выйти с аккаунта</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="gray_bg" id="gray_bgreg_profile"></div>
    </article>

    <article class="window" id="registr_id">
        <div class="window_form">
            <div class="window_block reg-block">
                <div style="display: flex;">
                    <section class="window_item">
                        <a class="siginbtn-down">Вход</a>
                    </section>
                    <section class="window_item">
                        <a class="regbtn-down">Регистрация</a>
                    </section>
                </div>
                <div class="form-box">
                    <form action="sign_user.php" class="form-form form-signup" method="POST">
                        <p><input name="name" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите имя"></p>
                        <p><input name="login" maxlength=15 size=15 type="text" class="form-input" placeholder="Придумайте логин"></p>
                        <p><input name="email" maxlength=20 size=20 type="text" class="form-input" placeholder="Введите E-Mail"></p>
                        <p><input name="password" maxlength=15 size=15 type="text" class="form-input" placeholder="Придумайте пароль"></p>
                        <div>
                            <a class="form-check-label">Кто вы?</a>
                            <input class="form-check-input" type="radio" name="prof" value="CLIENT" id="flexRadioDefault1" required checked>
                            <label class="form-check-label" for="flexRadioDefault1">Клиент</label>
                            <input class="form-check-input" type="radio" name="prof" value="VRACH" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">Врач</label>
                        </div>
                        <p><button type="submit" class="form-btn">Зарегистрироваться</button></p>
                    </form>
                    <form action="login_user.php" class="form-form form-signin" method="POST">
                        <p><input name="login" type="text" class="form-input" placeholder="Введите логин"></p>
                        <p><input name="password" type="text" class="form-input" placeholder="Введите пароль"></p>
                        <p><button type="submit" class="form-btn">Войти</button></p>
                        <a href="">Забыли пароль?</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="gray_bg" id="gray_bgreg"></div>
    </article>
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
            <div class="background_two_item"><img src="/img/kaif.png" alt=""><div style="font-size: 48px;">Точно</div><p style="font-size: 32px;">Стандартизации всех документов продукта</p></div>
            <div class="background_two_item"><img src="/img/kaif.png" alt=""><div style="font-size: 48px;">Точно</div><p style="font-size: 32px;">Стандартизации всех документов продукта</p></div>
            <div class="background_two_item"><img src="/img/kaif.png" alt=""><div style="font-size: 48px;">Точно</div><p style="font-size: 32px;">Стандартизации всех документов продукта</p></div>
        </div>
    </div>

</main>

<footer>
</footer>

</html>