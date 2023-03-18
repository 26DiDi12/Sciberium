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
    <script src="js/script_profile.js" defer></script>
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
                <form action="leave_user.php" style="position: absolute; top: 10px; left: 1812px;" method="POST">
                    <button type="submit">Выйти</button>
                </form>
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
    <div class="background_profile">
        <div class="profile_title">Личный кабинет</div>
        <div style="position: absolute; width: 1671.01px; height: 0px; left: 124px; top: 271px; border: 2px solid #575757;"></div>
        <div class="background_items_second_two">
            <div class="profile_btn">
                <p class="profile_btn_fin" id="profile_btn_info">Информация</p>
            </div>
            <div class="profile_btn">
                <p class="profile_btn_fin" id="profile_btn_buy">Покупки</p>
            </div>
            <div class="profile_btn">
                <p class="profile_btn_fin" id="profile_btn_supp">Техническая поддержка</p>
            </div>
        </div>

        <div class="profile_info">
            <p class="profile_info_input"><?php echo $_SESSION['user'] ?></p>
            <p class="profile_info_input"><?php echo $_SESSION['email'] ?></p>
            <p class="profile_info_input"><?php echo $_SESSION['phone'] ?></p>
            <p class="profile_info_input"><?php echo $_SESSION['city'] ?></p>
            <p class="profile_info_input"><?php echo $_SESSION['prof'] ?></p>
        </div>

        <div class="profile_supp">
            <p class="profile_supp_text">Что вам нужно?</p>
            <div class="profile_supp_btn_menu">
                <p class="profile_supp_btn">Вызвать техническую поддержку</p>
                <p class="profile_supp_btn">Задать вопрос</p>
            </div>
        </div>
        
        <div style="position: absolute; width: 1541px; height: 0px; left: 189px; top: 850px; border: 2px solid #575757;"></div>

    </div>

</main>

<footer>
</footer>

</html>