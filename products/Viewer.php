<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sciberium</title>
    <link rel="shortcut icon" href="/img/icon.ico">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/NunitoSans.css">
    <script src="/js/script.js" defer></script>
    <script src="/js/script_product.js" defer></script>
    <script src="/js/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="header_shapka">
        <a href="/index.php" class="header_logo">Sciberium</a>
        <div class="header_items">
            <div class="header_item">
                <a href="" style="color: white;">Язык</a>
            </div>
            <div class="header_item">
                <div class="products_menu_btn">
                    <a href="/catalog.php" style="color: white; border-bottom: 1px solid white;">Продукты</a>
                    <div class="products_menu"></div>
                    <div class="products_menu_box">
                        <a href="/products/Viewer.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia Viewer</div>
                        </a>
                        <a href="/products/PACS.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia PACS</div>
                        </a>
                        <a href="/products/Lungs.php" class="products_menu_num">
                            <img src="" alt="">
                            <div style="color: black;">Sciberia Lungs</div>
                        </a>
                        <a href="/products/Head.php" class="products_menu_num">
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
            <a href="/profile.php" class="avatar-btn">
                <div class="avatar_name"><?php
                                            echo $_SESSION['user'];
                                            ?></div>
                <img src="/img/avatar.png" alt="" height="55px">
            </a>
        <?php } else { ?>
            <a href="/register.php" class="avatar-btn">
                <div class="avatar_name"><?php
                                            echo $_SESSION['user']; ?></div>
                <img src="/img/avatar.png" alt="" height="55px">
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
    <div class="head"></div>
    <div class="product">
        <div><img src="/img/ViewerCEMac.svg" alt="" style="width: 725px;"></div>
        <div class="product_host">
            <p class="product_name">Sciberia Viewer CE<br>(Community Edition)</p>
            <p class="product_desc" style="font-weight: 600;">Тип лицензирования: бесплатная бессрочная лицензия</p>
            <p class="product_desc">Для личного использования, обучения и ознакомления. Кроссплатформенное ПО с поддержкой ОС: x86-64 Windows 7+ / macOS / Linux. Обладает всем необходимым функционалом для работы с медицинскими изображениями:</p>
            <div class="product_ninja" id="product_ninja_num1" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num1">Детальный просмотр</div>
                <p class="product_ninja_text" id="product_ninja_text_num1" style="font-weight: 100;">Просмотр исследований в отдельном окне с расширенным набором инструментов для измерений</p>
            </div>
            <div class="product_ninja" id="product_ninja_num2" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num2">Анонимизация</div>
                <p class="product_ninja_text" id="product_ninja_text_num2" style="font-weight: 100;">Анонимизация исследований по выбранным тегам</p>
            </div>
            <div class="product_ninja" id="product_ninja_num3" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num3">Печать</div>
                <p class="product_ninja_text" id="product_ninja_text_num3" style="font-weight: 100;">Печать исследований на специализированных принтерах</p>
            </div>
            <div class="product_ninja" id="product_ninja_num4" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num4">Локальная загрузка и экспорт</div>
                <p class="product_ninja_text" id="product_ninja_text_num4" style="font-weight: 100;">Возможность локального открытия и сохранения медицинских изображений формата DICOM любых модальностей</p>
            </div>
            <div class="product_moreinf">Windows_x32<a href="https://sciberia.ru/download/SciberiaViewerCE_Windows_x32.zip">Скачать</a></div>
            <div class="product_moreinf">Windows_x64<a href="https://sciberia.ru/download/SciberiaViewerCE_Windows_x64.zip">Скачать</a></div>
            <div class="product_moreinf">MacOS<a href="https://sciberia.ru/download/SciberiaViewerCE_MacOS.dmg">Скачать</a></div>
            <div class="product_moreinf">ArchLinux_x64<a href="https://sciberia.ru/download/SciberiaViewerCE_ArchLinux_x64.zip">Скачать</a></div>
            <div class="product_moreinf">Debian_x64<a href="https://sciberia.ru/download/SciberiaViewerCE_Debian_x64.zip">Скачать</a></div>
            <div class="product_moreinf">Инструкция по установке<a href="https://sciberia.ru/download/readme.txt">Скачать</a></div>
        </div>
    </div>

    <div class="product">
        <div class="product_host">
            <p class="product_name">Sciberia Viewer</p>
            <p class="product_desc" style="font-weight: 600;">Тип лицензирования: коммерческий<br>Срок действия лицензии: 1 год</p>
            <p class="product_desc">Для медицинских организаций с диагностическим оборудованием и собственным хранилищем данных. Обладает функционалом Sciberia Viewer CE и дополнительно включает в себя следующие функции:</p>
            <div class="product_ninja" id="product_ninja_num5" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num5">MPR</div>
                <p class="product_ninja_text" id="product_ninja_text_num5" style="font-weight: 100;">Мультипланарная реконструкция (MPR). Для просмотра изображения в 3-х плоскостях (аксиальная, фронтальная, сагиттальная)</p>
            </div>
            <div class="product_ninja" id="product_ninja_num6" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num6">Экспресс-просмотр</div>
                <p class="product_ninja_text" id="product_ninja_text_num6" style="font-weight: 100;">Предварительный просмотр серий исследования в главном окне</p>
            </div>
            <div class="product_ninja" id="product_ninja_num7" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num7">Массовая анонимизация и отправка</div>
                <p class="product_ninja_text" id="product_ninja_text_num7" style="font-weight: 100;">Выбор нескольких исследований для одновременной анонимизации и/или отправки на PACS-серверы</p>
            </div>
            <div class="product_ninja" id="product_ninja_num8" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num8">Альбомы и авто-запрос</div>
                <p class="product_ninja_text" id="product_ninja_text_num8" style="font-weight: 100;">Возможность создания персональных альбомов по выбранным параметрам (дата, модальность, источник) с функцией авто-запроса исследований из PACS-серверов</p>
            </div>
        </div>
        <div><img src="/img/ViewerMacNOR.svg" alt="" style="width: 725px;"></div>
    </div>

    <div class="product">
        <div><img src="/img/ViewerPro.svg" alt="" style="width: 725px;"></div>
        <div class="product_host">
            <p class="product_name">Sciberia Viewer Pro</p>
            <p class="product_desc" style="font-weight: 600;">Тип лицензирования: коммерческий<br>Срок действия лицензии: 1 год</p>
            <p class="product_desc">Обладает всеми функциями Sciberia Viewer с расширенными возможностями:</p>
            <div class="product_ninja" id="product_ninja_num9" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num9">Микромодели</div>
                <p class="product_ninja_text" id="product_ninja_text_num9" style="font-weight: 100;">Функция семантической сегментации в КТ исследованиях органов грудной клетки и головного мозга с использованием технологий компьютерного зрения</p>
            </div>
            <div class="product_ninja" id="product_ninja_num10" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num10">VRT/3D</div>
                <p class="product_ninja_text" id="product_ninja_text_num10" style="font-weight: 100;">Технология объемной визуализации (VRT/3D) с созданием трехмерных моделей</p>
            </div>
            <div class="product_ninja" id="product_ninja_num11" style="font-weight: 600;">
                <div class="product_ninja_title" id="product_ninja_title_num11">miniPACS</div>
                <p class="product_ninja_text" id="product_ninja_text_num11" style="font-weight: 100;">Поддержка функции DICOM узла: отправка, прием (Query/Retrieve SCP) и сохранение (С-Store) DICOM-файлов, возможность интеграции с медицинским оборудованием</p>
            </div>
        </div>
    </div>

    <div class="product">
        <table class="table">
            <tr class="table_head">
                <th></th>
                <th class="table_name"><b>Sciberia Viewer CE (community edition)</b></th>
                <th class="table_name"><b>Sciberia Viewer</b></th>
                <th class="table_name"><b>Sciberia Viewer Pro</b></th>
            </tr>
            <tr>
                <td>Детальный просмотр</td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Анонимизация и печать</td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Просмотр метаданных</td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Запись на диск (CD/DVD)</td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Локальная загрузка и экспорт</td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>MPR</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Экспресс-просмотр</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Массовая анонимизация и отправка</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Альбомы и авто-запрос</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>Микромодели</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>VRT/3D</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr>
                <td>miniPACS</td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/noacess.svg" alt=""></td>
                <td><img src="/img/acess.svg" alt=""></td>
            </tr>
            <tr class="table_last">
                <td>Стоимость (за 1 рабочее место)</td>
                <td class="table_cost"><b>Бесплатно</b></td>
                <td class="table_cost"><b>35 000,00₽</b></td>
                <td class="table_cost"><b>99 500,00₽</b></td>
            </tr>
        </table>
    </div>

</main>

<!-- <footer>
</footer> -->

</html>