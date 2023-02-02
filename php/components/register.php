<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- BS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/jquery-ui-1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../../js/jquery-ui-1.13.2/jquery-ui.min.css">
    <script src="../../js/jquery.inputmask.bundle.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="profile_wrapper">
        <!-- Header -->
        <header id="profile_header">
            <!-- Header Images -->
            <div class="profile_header_top_panel">
                <div class="profile_header_top_panel_logo">
                    <a href>
                        <img src="../../img/logo_slogan.png" alt="Site-Logo">
                    </a>
                </div>
                <div class="profile_header_top_panel_year">
                    <img src="../../img/year.png" alt="Site-Year">
                </div>
            </div>
            <!-- Header Nav -->
            <div class="profile_header_nav_panel_wrapper">
                <div class="profile_header_nav_panel_logo">
                    <a href="">
                        <img src="../../img/logo_1.png" alt="Site-Logo">
                    </a>
                </div>
                <nav class="profile_header_nav_panel">
                    <li>
                        <a href="../../index.php">Главная</a>
                    </li>
                </nav>
            </div>
        </header>
        <!-- Main Content -->
        <main id="profile_content">
            <div class="profile_content_login_wrapper">
                <h2 class="profile_content_login_title">
                    Регистрация
                </h2>
                <div class="profile_content_login_panel">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body profile_content_login_inputs">
                            <form action="register_logic.php" method="get" class='profile_register-form'>
                                <!-- Логин -->
                                <div class="profile_login_inp_wrapper">
                                    <label for="registerLogin">
                                        Логин:
                                    </label>
                                    <input type="text" name="register_login" id="registerLogin" required>
                                </div>
                                <!-- Пароль -->
                                <div class="profile_password_inp_wrapper">
                                    <label for="registerPassword">
                                        Пароль
                                    </label>
                                    <input type="password" name="register_password" id="registerPassword" required>
                                </div>
                                <!-- Подтверждение пароля -->
                                <div class="profile_password_inp_wrapper">
                                    <label for="registerConfPassword">
                                        Подтверждение пароля
                                    </label>
                                    <input type="password" name="register_confirm_password" id="registerConfPassword" required>
                                </div>
                                <!-- Имя* -->
                                <div>
                                    <label for="registerName">Имя</label>
                                    <input type="text" name='register_name' id="registerName">
                                </div>
                                <!-- Фамилия* -->
                                <div>
                                    <label for="registerSecName">Фамилия</label>
                                    <input type="text" name='register_sec_name' id="registerSecName">
                                </div>
                                <!-- Отчество* -->
                                <div>
                                    <label for="registerLastName">Отчество</label>
                                    <input type="text" name='register_last_name' id="registerLastName">
                                </div>
                                <div>
                                    <label for="registerTel">Телефон</label>
                                    <input type="text" name='register_tel' id="registerTel">
                                </div>
                                <input type='submit' name='profile_register_btn' class="btn btn-secondary" value="Регистрация">
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </main>
    </div>
    <?
    ?>
    <script src="../../js/custom.js"></script>
</body>
</html>