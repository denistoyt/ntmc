<?
    session_start();
    require_once('../db/logic.php');
    if($_SESSION['autorized'] == true) {
        require_once('profile_logic.php');
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
    <!-- Talon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/vfs_fonts.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    <title>Личный кабинет: <?=$_SESSION['login']?></title>
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
                    <li>
                        <a href="logout.php">Выход</a>
                    </li>
                </nav>
            </div>
        </header>
        <!-- Main Content -->
        <main id="profile_content">
            <div class="profile_content_login_wrapper">
                <h2 class="profile_content_title">
                    Личный кабинет
                </h2>
                <h4>Ваши данные</h4>
            </div>
            <!-- Data Block -->
            <section class="profile_data_wrapper">
                    <!-- User Data -->
                    <div class="profile_data">
                        <form action="" method="post" class="profile_data_form">
                            <!-- Edit Data -->
                            <input type="submit" value="Редактировать данные" class="profile-personal-edit-link" name="profile_personal_edit_link" disabled>
                            <!-- Name -->
                            <div class="profile_data_name_field profile_data_inputs_wrapper">
                                <label for="profileName">
                                    Имя
                                </label>
                                <input type="text" name='user_name_inp' class="profile_data_name_inp profile_data_inputs" id="profileName" value='<?=$user_name?>' readonly>
                            </div>
                            <!-- Sec Name -->
                            <div class="profile_data_secname_field profile_data_inputs_wrapper">
                            <label for="profileSecName">
                                    Фамилия
                                </label>
                                <input type="text" name='user_secname_inp' class="profile_data_secname_inp profile_data_inputs" id="profileSecName" value="<?=$user_secname?>" readonly>
                            </div>
                            <!-- Last Name -->
                            <div class="profile_data_lastname_field profile_data_inputs_wrapper">
                            <label for="profileLastName">
                                    Отчество
                                </label>
                                <input type="text" name='user_lastname_inp' class="profile_data_lastname_inp profile_data_inputs" id="profileLastName" value="<?=$user_lastname?>" readonly>
                            </div>
                            <!-- Born Date -->
                            <div class="profile_data_born_field profile_data_inputs_wrapper">
                            <label for="profileBorn2">
                                    Дата рождения
                                </label>
                                <input type="text" name='user_born_inp' class="profile_data_born_inp profile_data_inputs" id="profileBorn2" value="<?=$user_born?>" readonly>
                            </div>
                            <!-- Polis -->
                            <div class="profile_data_polis_field profile_data_inputs_wrapper">
                            <label for="profilePolis">
                                    Полис ОМС
                                </label>
                                <input type="text" name='user_polis_inp' class="profile_data_polis_inp profile_data_inputs" id="profilePolis" value="<?=$user_polis?>" readonly>
                            </div>
                            <!-- SNILS -->
                            <div class="profile_data_snils_field profile_data_inputs_wrapper">
                            <label for="profileSnils">
                                    <span>*</span>СНИЛС
                                </label>
                                <input type="text" name='user_snils_inp' class="profile_data_snils_inp profile_data_inputs" id="profileSnils" value="<?=$user_snils?>" readonly>
                            </div>
                            <!-- Telephone -->
                            <div class="profile_data_tel_field profile_data_inputs_wrapper">
                            <label for="profileTel">
                                    <span>*</span>Телефон
                                </label>
                                <input type="text" name='user_tel_inp' class="profile_data_tel_inp profile_data_inputs" id="profileTel" value="<?=$user_tel?>" readonly>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <!-- User Recepts Table -->
                    <div class="profile_recepts">
                        <h4>Записи на прием</h4>
                        <table class="profile_recepts_table">
                            <!-- Шапка таблицы -->
                            <tr class="recepts_table_header">
                                <th>Специалист</th>
                                <th>Врач</th>
                                <th>Дата записи</th>
                                <th>Дата приема</th>
                                <th>Время приема</th>
                                <th>Кабинет</th>
                            </tr>
                            <!-- Заполнение данными -->
                            <?
                                foreach($order_l as $order) {
                                    $order_spec = $order['doctor_spec'];
                                    $order_doc = $order['doctor_sfl'];
                                    $order_date = date('d.m.Y', strtotime($order['order_date']));
                                    $order_rec_date = date('d.m.Y', strtotime($order['recept_date']));
                                    $order_time = date('h:i', strtotime($order['recept_time']));
                                    $cab = "SELECT `doctor_cab` FROM `doctors` WHERE `doctor_sfl` = ?";
                                    $cab_d = $pdo->prepare($cab);
                                    $cab_d->execute(array("$order_doc"));
                                    $cab_l = $cab_d->fetchAll();
                                    foreach($cab_l as $cab) {
                                        $doc_cab = $cab['doctor_cab'];
                                    }
                                    echo "
                                    <tr class='recepts_table_body'>
                                        <td id='recept-spec'>".$order_spec."</td>
                                        <td id='recept-doctor'>".$order_doc."</td>
                                        <td id='doctor-recept-date'>".$order_date."</td>
                                        <td id='doctor-recept-time'>".$order_rec_date."</td>
                                        <td>".$order_time."</td>
                                        <td id='doctor_cab'>".$doc_cab."</td>
                                    </tr>";
                                }
                            ?>
                        </table>
                    </div>
            </section>
        </main>
    </div>
    
    <!-- jQuery -->
    <script src="../../js/custom.js"></script>
</body>
</html>
<?
    }
?>