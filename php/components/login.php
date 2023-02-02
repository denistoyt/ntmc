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
    <link rel="stylesheet" href="../../css/style.css">
    <title>Вход в личный кабинет</title>
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
                    Вход в личный кабинет
                </h2>
                <div class="profile_content_login_panel">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body profile_content_login_inputs">
                            <form action="login_logic.php" method="get" class='profile_login-form'>
                                <div class="profile_login_inp_wrapper">
                                    <label for="profileLogin">
                                        Логин:
                                    </label>
                                    <input type="text" name="profile-login" id="profileLogin" required>
                                </div>
                                <div class="profile_password_inp_wrapper">
                                    <label for="profilePassword">
                                        Пароль
                                    </label>
                                    <input type="password" name="profile-password" id="profilePassword" required>
                                </div>
                                <input type='submit' name='profile-login-btn' class="btn btn-secondary" value="Войти">
                            </form>
                        </div>
                    </div>
                    <br>
                    <span>Не зарегистрированы?</span><br>
                    <a href="register.php">Пройти регистрацию</a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>