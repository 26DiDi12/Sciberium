<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sciberium</title>
    <link rel="shortcut icon" href="img/icon.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/NunitoSans.css">
    <script src="js/script.js" defer></script>
    <script src="js/script_catalog.js" defer></script>
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
                    <a href="catalog.php" style="color: white; border-bottom: 1px solid white;">Продукты</a>
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
                    <a href="" style="color: white;">Новости</a>
                    <div class="products_menu" style="left: 990px"></div>
                    <div class="products_menu_box" style="left: 990px">
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
                <div class="avatar_name"><p><?php
                                            echo $_SESSION['user'];
                                            ?></p></div>
                <img class="avatar_img" src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } else { ?>
            <a href="register.php" class="avatar-btn">
                <div class="avatar_name"><p><?php
                                            echo $_SESSION['user']; ?></p></div>
                <img class="avatar_img" src="img/avatar.png" alt="" height="55px">
            </a>
        <?php } ?>

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
                    </form>
                </div>
            </div>
        </div>
        <div class="gray_bg" id="gray_bgreg"></div>
    </article>
</body>

<main>

    <div class="head"></div>
    <div class="products">
        <div class="product">
            <div><img src="img/ViewerMac.svg" alt="" style="width: 320px; height: 320px;"></div>
            <div class="product_host">
                <p class="product_name">Sciberia Viewer</p>
                <p class="product_desc">Инструмент для просмотра медицинских изображений различной модальности, позволяет просматривать исследования, проводить первичную оценку и измерения</p>
                <a href="products/Viewer.php"><button class="product_moreinf">Подробнее</button></a>
            </div>
        </div>
        <div class="product">
            <div><img src="img/PacsMac.svg" alt="" style="width: 320px; height: 320px;"></div>
            <div class="product_host">
                <p class="product_name">Sciberia PACS</p>
                <p class="product_desc">Программное обеспечение для оперативного и архивного хранения медицинских изображений различной модальности, позволяет загружать, хранить и передавать медицинские изображения внутри медицинской организации, ее отделений или между ними</p>
                <button class="product_moreinf">Подробнее</button>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="product">
            <div><img src="img/LungsMac.svg" alt="" style="width: 320px; height: 320px;"></div>
            <div class="product_host">
                <p class="product_name">Sciberia Lungs</p>
                <p class="product_desc">Программный модуль для обработки исследований рентгеновской компьютерной томографии органов грудной клетки, который быстро формирует количественные и качественные характеристики для классификации неспецифической интерстициальной пневмонии, в том числе вызванной COVID-19</p>
                <button class="product_moreinf">Подробнее</button>
            </div>
        </div>
        <div class="product">
            <div><img src="img/HeadMac.svg" alt="" style="width: 320px; height: 320px;"></div>
            <div class="product_host">
                <p class="product_name">Sciberia Head</p>
                <p class="product_desc">Программный модуль для обработки исследований рентгеновской компьютерной томографии головного мозга и быстрого формирования характеристик для диагностики внутримозгового кровоизлияния</p>
                <button class="product_moreinf">Подробнее</button>
            </div>
        </div>
    </div>

</main>

<!-- <footer>
</footer> -->

</html>