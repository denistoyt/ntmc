<?
    session_start();
    //require_once('php/db/logic.php');
?>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>НТМЦ</title>
        <meta name="viewport" content="width=device-width">
        <meta name="content-type" content="text/html; charset=utf-8">
        <meta name="robots" content="index,follow">
        <!-- Logo -->
        <link rel="shortcut icon" href="img/logo.png">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Custom Css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- pdfmake files: -->
        <!-- <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/pdfmake.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/pdfmake@latest/build/vfs_fonts.min.js'></script> -->
        <script src="js/pdfmake-master/build/pdfmake.min.js"></script>
        <script src="js/pdfmake-master/build/vfs_fonts.js"></script>
        <!-- JS Input Mask -->
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="js/jquery.inputmask.bundle.min.js"></script>
        <!-- jQuery UI -->
        <script src="js/jquery-ui-1.13.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.min.css">
        <!-- BS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Min Css -->
        <link href="css/frontend.min.css" media="screen" rel="stylesheet" type="text/css">  
        <link rel="stylesheet" href="css/widget.css" class="jv-css">
        <link rel="stylesheet" type="text/css" href="css/omnichannelMenu.widget.css">   
        <link rel="stylesheet" href="css/custom.css">
        <!-- Burger Menu JS -->
        <!-- <script async="#" src="#"></script><script src="js/header-anim.vendor.min.js"></script>
        <script src="js/header-anim.min.js"></script> -->
    </head>
    <body>
        <div id="testDiv">
            <p></p>
        </div>
        <div class="page-wrapper">
            <div class="site-header">
            <div class="top-panel">
                <div class="logo-label">
                    <a href="#"><img src="img/logo_slogan.png"></a>
                </div>
                <div class="year">
                    <img src="img/year.png" srcset="/img/ntmc/year2x.png 2x">
                </div>
                <!-- Кнопка записи на прием -->
                <div class="main_page_btns_wrapper">
                    <? if($_SESSION['autorized'] == true) {
                            echo '<a href="#" class="call-order-btn btn btn-red enter-priem-btn recept-modal-btn user_enter_recept_link" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Запись на прием</a>
                            <a href="php/components/profile.php" class="call-order-btn btn btn-red btn-secondary user_profile_login_link user_profile_link">Профиль</a>';
                        }
                        else {
                            echo '<a href="#" class="call-order-btn btn btn-red enter-priem-btn recept-modal-btn user_enter_recept_link" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Запись на прием</a>
                            <a href="php/components/login.php" class="call-order-btn btn btn-red btn-secondary user_profile_login_link">Войти</a>';
                        }
                    ?>
                </div>
                <!-- Modal -->
                <!-- Выбор Услуги -->
                <div class="modal" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid ps-0">
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                      <li class="nav-item">
                                        <a class="nav-link active ps-0 disabled text-danger" aria-current="page" href="#">Выбор услуги</a>
                                      </li>
                                      <li class="nav-item">
                                        <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="date-time-btn" disabled>Дата и время</button>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link disabled">Ваши данные</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            </nav>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body container-fluid">
                            <!-- Форма Заполнения Типа Услуги -->
                            <div class="recept_service_type d-grid">
                                <div class="recept_service_type_item d-grid">
                                    <label for="recept-way">Тип приема</label>
                                    <!-- Тип -->
                                    <select id="recept-way" class="variant-selector" name="recept_way">
                                        <option value="Первичный">Первичный</option>
                                        <option value="Вторичный">Вторичный</option>
                                    </select>
                                    <!-- Тип -->
                                </div>
                                <div class="recept_service_type_item d-grid">
                                    <label for="recept-age">Направление</label>
                                    <!-- Направление -->
                                    <select id="recept-age" class="variant-selector" name="recept_age">
                                        <option value="Детский">Детский</option>
                                        <option value="Взрослый">Взрослый</option>
                                    </select>
                                    <!-- Направление -->
                                </div>
                                <div class="recept_service_type_item d-grid">
                                    <label for="recept-spec">Специалист</label>
                                    <!-- Специальности -->
                                    <select id="recept-spec" class="variant-selector" name='spec_select'>
                                        <option value=""></option>
                                    </select>
                                    <!-- Специальности -->
                                </div>
                                <div class="recept_service_type_item d-grid">
                                    <label for="recept-doctor">Врач</label>
                                    <!-- Доктора -->
                                    <select id="recept-doctor" class="variant-selector" name='doctors_sfl'>
                                        <option value=""></option>
                                    </select>
                                    <!-- Доктора -->
                                    <!-- Кабинет -->
                                    <select id="doctor_cab" hidden>
                                        <option value=""></option>
                                    </select>
                                    <!-- Кабинет -->
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="date-time-btn" id="date_time_btn">Выбрать дату и время</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Дата и время -->
                  <div class="modal" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid ps-0">
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                      <li class="nav-item">
                                        <button data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="date-time-btn">Выбор услуги</button>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active ps-0 disabled text-danger" aria-current="page" href="#">Дата и время</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link disabled">Ваши данные</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            </nav>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Форма Заполнения Даты приема -->
                        <div class="modal-body date-time-inputs-wrapper">
                            <div class="date-time-date">
                                <label for="doctor-recept-date">Выберите дату приема:</label>
                                <!-- Дата Приема -->
                                <input type="date" name="doctor_recept_date" id="doctor-recept-date" required>
                                <!-- Дата Приема -->
                            </div>
                            <div class="date-time-date">
                                <!-- Время Приема -->
                                <label for="doctor-recept-time">Выберите время приема:</label>
                                <input type="time" name="doctor_recept_time" id="doctor-recept-time">
                                <!-- Время Приема -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Выбор услуг</button>
                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Ввести данные пациента</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Данные Пациента -->
                <div class="modal" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <nav class="navbar navbar-expand-lg">
                                <div class="container-fluid ps-0">
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                      <li class="nav-item">
                                        <button data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="date-time-btn">Выбор услуги</button>
                                      </li>
                                      <li class="nav-item">
                                        <button data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" class="date-time-btn">Дата и время</button>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link active ps-0 disabled text-danger" aria-current="page" href="#">Ваши данные</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                            </nav>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Форма заполнения данных пациента -->
                            <div class="patient-recept-data d-grid">
                                <div class="patient-recept-data-item d-grid">
                                    <label for="patient-recept-name">Имя</label>
                                    <!-- Имя -->
                                    <input type="text" name="patient_recept_name" id="patient-recept-name" required>
                                    <!-- Имя -->
                                </div>
                                <div class="patient-recept-data-item d-grid">
                                    <label for="patient-recept-secname">Фамилия</label>
                                    <!-- Фамилия -->
                                    <input type="text" name="patient-recept-secname" id="patient-recept-secname" required>
                                    <!-- Фамилия -->
                                </div>
                                <div class="patient-recept-data-item d-grid">
                                    <label for="patient-recept-lastname">Отчество</label>
                                    <!-- Отчество -->
                                    <input type="text" name="patient-recept-lastname" id="patient-recept-lastname" required>
                                    <!-- Отчество -->
                                </div>
                                <div class="patient-recept-data-item d-grid">
                                    <label for="patient-recept-birth">Дата Рождения</label>
                                    <!-- Дата рождения -->
                                    <input type="date" name="patient_recept_birth" id="patient-recept-birth" required>
                                    <!-- Дата рождения -->
                                </div>
                                <div class="patient-recept-data-item d-grid">
                                    <label for="patient-recept-tel">Телефон</label>
                                    <!-- Телефон -->
                                    <input type="text" name="patient_recept_tel" id="patient-recept-tel" required>
                                    <!-- Телефон -->
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Выбрать дату и время</button>
                            <!-- Кнопка записи -->
                            <button target='_blank' class="btn btn-primary confirm_recept" name='confirm_recept' id='create_order_btn'>Записаться</button>
                            <!-- /Кнопка записи -->
                            <!-- Подключение создания талона -->
                            <script src="js/talon_create.js"></script>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Кнопка записи на прием -->    
            </div>
            <div class="main-nav">
                <div class="logo">
                    <a href="#"><img src="img/logo_1.png"></a>
                </div>  
                <ul class="header_menu_items">
                    <li>
                        <a href="#"><span>Главная</span>
                        </a>
                    </li>
                    <li>
                        <a href="php/components/price_list.php"><span>Прайс-лист</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><span>Новости</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><span>Контакты</span>
                        </a>
                    </li>  
                    <!--<li class='action'>
                        <button style="width:100%;" class="call-order-btn btn btn-red b24-web-form-popup-btn-3">Мы перезвоним вам</button>
                    </li>-->
                    <li class="action">
                        <a href="#" class="call-order-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                            <span>Записаться на прием</span>
                        </a>
                        <a href="php/components/login.php" class="call-order-btn">
                            <span>Войти</span>
                        </a>
                    </li>
                </ul>
                <div class="mobile-nav-btn"><svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="#"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> --></div>
                <div class="mobile-nav-close-btn" style="display: none;"><svg class="svg-inline--fa fa-times-circle fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="#"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg><!-- <i class="fas fa-times-circle"></i> --></div>
            </div>      
            <div class="clear"></div>
        </div>
        <!-- Баннер -->
        <div class="pogoSlider pogoSlider--dirCenterHorizontal pogoSlider--navBottom" id="js-main-slider" style="padding-bottom: 33.3333%; display:none;">
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/covid.jpg&quot;); opacity: 0;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                            <h2 class="pogoSlider-slide-element" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 0;">МАЗОК на COVID-19</h2>	
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 0;">
                                Исследование ПЦР на COVID-19
                            </p> 
                            <a href="#" class="btn btn-red mt-30 pogoSlider-slide-element" data-in="slideRight" data-out="slideDown" data-duration="1750" data-delay="500" style="opacity: 0;">
                                Подробнее 
                                <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="#">
                                <path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                                </svg>
                            </a>		
                        </div>
                    </div>
                </div>		
            </div>  
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/varicoz.jpg&quot;); opacity: 0;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                            <h2 class="pogoSlider-slide-element" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 0;">ЛЕЧЕНИЕ ВАРИКОЗА в НТМЦ</h2>	
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 0;">
                            Успевайте!!! До конца лета скидка 30% на прием флеболога с УЗИ вен</p> 
                            <a href="#" class="btn btn-red mt-30 pogoSlider-slide-element" data-in="slideRight" data-out="slideDown" data-duration="1750" data-delay="500" style="opacity: 0;">Подробнее <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="#"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></a>		
                        </div>
                    </div>
                </div>		
            </div>    
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/kolono.jpg&quot;); opacity: 0; transition-duration: 1000ms; z-index: 1;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                            <h2 class="pogoSlider-slide-element pogoSlider-animation-expandOut" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 1; animation-duration: 1750ms;">КОЛОНОСКОПИЯ с седацией</h2>	
                            <p class="pogoSlider-slide-element pogoSlider-animation-slideUpOut" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 1; animation-duration: 1750ms;">
                            Теперь возможно прохождение исследования в состоянии медикаментозного сна</p>         
                            <a href="#" class="btn btn-red mt-30 pogoSlider-slide-element pogoSlider-animation-slideDownOut" data-in="slideRight" data-out="slideDown" data-duration="1750" data-delay="500" style="opacity: 1; animation-duration: 1750ms;">Подробнее <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="#"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></a>		
                        </div>
                    </div>
                </div>		
            </div>   
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/kvitar.jpg&quot;); opacity: 1; transition-duration: 1000ms;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                            <h2 class="pogoSlider-slide-element" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 0;">Лечение на аппарате КАВИТАР в НТМЦ</h2>	
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 0;">
                            Лечение и профилактика воспалительных заболеваний слизистых ЛОР-органов</p> 
                        </div>
                    </div>
                </div>		
            </div>    
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/fgds.jpg&quot;); opacity: 0;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                            <h2 class="pogoSlider-slide-element" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 0;">ФГДС в вечернее время и выходные дни</h2>	   
                            <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 0;">
                            Возможность пройти эндоскопическое исследование в удобное время</p> 
                            <a href="#" class="btn btn-red mt-30 pogoSlider-slide-element" data-in="slideRight" data-out="slideDown" data-duration="1750" data-delay="500" style="opacity: 0;">Подробнее <svg class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="#"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></a>		
                        </div>
                    </div>
                </div>		
            </div>    
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/massage.jpg&quot;); opacity: 0;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>
                <div class="container">
                    <div class="slider-content">
                        <div class="slider-content-inner">
                        <h2 class="pogoSlider-slide-element" data-in="contract" data-out="expand" data-duration="1750" data-delay="500" style="opacity: 0;">МАССАЖ в вечернее время и в выходные</h2>	
                        <p class="pogoSlider-slide-element" data-in="slideRight" data-out="slideUp" data-duration="1750" data-delay="5500" style="opacity: 0;">
                        Теперь услуга медицинского массажа возможна ежедневно, в том числе в вечернее время</p> 
                    </div>
                    </div>
                </div>		
            </div>    
            <div class="pogoSlider-slide " data-transition="fade" data-duration="1000" style="background-image: url(&quot;img/zapis.jpg&quot;); opacity: 0;"><div class="pogoSlider-progressBar"><div class="pogoSlider-progressBar-duration" style="width: 0px;"></div></div>		
            </div>    
            <button class="pogoSlider-dir-btn pogoSlider-dir-btn--prev"></button><button class="pogoSlider-dir-btn pogoSlider-dir-btn--next"></button><ul class="pogoSlider-nav"><li data-num="0"><button class="pogoSlider-nav-btn"></button></li><li data-num="1"><button class="pogoSlider-nav-btn"></button></li><li data-num="2"><button class="pogoSlider-nav-btn pogoSlider-nav-btn--selected"></button></li><li data-num="3"><button class="pogoSlider-nav-btn"></button></li><li data-num="4"><button class="pogoSlider-nav-btn"></button></li><li data-num="5"><button class="pogoSlider-nav-btn"></button></li><li data-num="6"><button class="pogoSlider-nav-btn"></button></li></ul></div>
            <div class="content">
            <div class="hl hl-primary-light hl-10"></div>
            <div class="content-body blue start-page">
                <table style="width: 1089px; height: 527px;">
                    <tbody>
                    <tr style="height: 428px;">
                    <td style="vertical-align: top; width: 532.516px; height: 428px;">
                    <p><img class="mfw_image" src="img/center_photo.jpg" width="577" height="325"></p>
                    <p class="quotes">Мы дорожим Вашим здоровьем, временем и мнением. <br>Ждем от вас отзывы о нашей работе, пожелания и предложения!</p>
                    </td>
                    <td style="vertical-align: top; width: 540.484px; height: 428px;">
                    <p><strong>Дорогие друзья! </strong></p>
                    <p style="text-align: justify;">Искренне рады приветствовать Вас на сайте группы компаний Нижнетагильского медицинского центра (НТМЦ). Надеемся, что виртуальное знакомство со специалистами Центра, ознакомление с широчайшим спектром услуг, нами оказываемых, видеопутешествие по великолепным и уютным холлам, современным медицинским кабинетам заинтересуют Вас, информация будет полезной, и мы встретимся - с надеждой на добрую дружбу и здоровое будущее, Вас и Ваших близких.</p>
                    <p style="text-align: justify;">Жители Нижнего Тагила - труженики, создающие оборонную мощь страны, достойны высококвалифицированной медицинской помощи, имеют право на чуткое отношение к себе, так как от их здоровья и трудоспособности зависят нерушимость границ нашей Родины, ее процветание.</p>
                    <p style="text-align: justify;">Гуманизм и милосердие, вежливость и профессионализм, индивидуальный подход к проблемам каждого пациента – вот основа повседневной деятельности замечательного коллектива единомышленников: высококлассных врачей нашего города, кандидатов и докторов медицинских наук областных медицинских центров и клиник, ученых Уральской государственной медицинской академии.</p>
                    <p style="text-align: justify;">В комфортной для Вас обстановке, в удобное для Вас время, 7 дней в неделю мы ждем Вас, чтобы на самом современном лечебном и диагностическом оборудовании вместе решить Ваши проблемы, сберечь Ваши силы и средства, сохранить Ваше время, укрепить Ваше здоровье.</p>
                    <p><strong><em>Генеральный директор группы компаний&nbsp; "НТМЦ"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; И.М. Зыков.</em></strong></p>
                    </td>
                    </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
            </div>
            <div class="hl hl-primary-light hl-10"></div>
            <!-- Новости НТМЦ -->
            <div class="two-columns start-news d-none">
                <div class="start-page-content">
                    <h1>Новости «НТМЦ»</h1>
                <div class="news_item" data-id="130">
                    <div class="news-img">
                        <a href="#">
                            <img src="img/schooler.jpg">        
                        </a>
                    </div>
                    <div class="news-content">
                        <span>08.09.2022 15:36</span>
                        <h2 class="news_header"><a href="#">Встречаем нового доктора!</a></h2>
                        <p>В детском отделении открыт прием детского офтальмолога Рудик Анастасии Николаевны</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="news_item" data-id="129">
                    <div class="news-img">
                        <a href="#">
                            <img src="img/red_btn.gif">        
                        </a>
                    </div>
                    <div class="news-content">
                        <span>08.07.2022 14:03</span>
                        <h2 class="news_header"><a href="#">Открыта онлайн запись на прием</a></h2>
                        <p>Теперь возможна запись на прием к врачу на сайте НТМЦ</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="news_item" data-id="128">
                    <div class="news-img">
                        <a href="#">
                            <img src="img/doctor.png">        
                        </a>
                    </div>
                    <div class="news-content">
                        <span>06.04.2022 10:37</span>
                        <h2 class="news_header"><a href="#">Встречаем детского хирурга!</a></h2>
                        <p>В детском отделении возобновлён прием детского хирурга</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="news_item" data-id="127">
                    <div class="news-img">
                        <a href="#">
                            <img src="img/med_ear.png">        
                        </a>
                    </div>
                    <div class="news-content">
                        <span>06.04.2022 10:05</span>
                        <h2 class="news_header"><a href="#">Знакомимся с новым врачом</a></h2>
                        <p>В НТМЦ открыт постоянный прием врача терапевта</p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="services start-page-services">
                <a class="service-item call-order-btn recept-modal-btn" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                    <div class="service-header icon icon-calendar">
                        Записаться<br>на прием
                    </div>
                    <p>
                        Вы можете записаться на прием к любому врачу нашей клиники. 
                        Познакомиться с нашими врачами можно в разделе "Специалисты"
                    </p>
                </a>
            </div>   
        </div>        
    </div>
        <div class="clear"></div> 
            </div >
                <!-- Нижнее Содержание -->
                <div class="page-wrapper transparent" style='display:none;'>
                    <div class="footer">
                        <div class="info">
                            <div class="contacts">
                                
                                <div class="work-time">
                                    Ежедневно<br>
                                    без выходных и перерывов<br>
                                    с 8:00 до 20:00
                                    <p>
                                        г. Нижний Тагил, <br>
                                        ул. Черемшанская, 3            
                                    </p>
                                </div>
                                <div class="phones-and-emails">
                                    <p class="phone">(3435) 230-310</p>
                                    
                                    <div class="mt_15">
                                        <p class="email"><a href="mailto:denistoplay23@mail.ru">denistoplay23@mail.ru</a></p>
                                        <p class="email"><a href="mailto:denistoplay23@mail.ru">denistoplay23@mail.ru</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="license">
                                <p>
                                ЛИЦЕНЗИЯ № ЛО-66-01-004161 от 14 июля 2016 года выдана<br>
                                <a href="#">Министерством здравоохранения Свердловской области</a>
                                </p>
                                <p>
                                    ООО "Нижнетагильский Медицинский центр"<br>
                                    © 2014-2022 Все права защищены
                                </p>
                            </div>
                        </div>
                
                <div class="links">
                    <div class="links-col">
                        <h3>О клинике</h3>
                        <ul class="#">
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Отзывы</a></li>
                            <li><a href="#">Фотогалерея</a></li>
                            <li><a href="#">Фото сотрудников в работе</a></li>
                            <li><a href="#">Лицензии</a></li>
                            <li><a href="#">Экскурсия по этажам</a></li>
                            <li><a href="#">Вакансии</a></li>
                        </ul>  
                    </div>
                    <div class="links-col">
                        <h3>Наши направления</h3>
                        <ul class="#">
                            <li><a href="#">Консультативная диагностика</a></li>
                            <li><a href="#">УЗ Диагностика</a></li>
                            <li><a href="#">Функциональная диагностика</a></li>
                            <li><a href="#">Офтальмология</a></li>
                            <li><a href="#">Флебология</a></li>
                            <li><a href="#">Эндоскопия</a></li>
                            <li><a href="#">Лаборатория</a></li>
                            <li><a href="#">Медосмотры</a></li>
                            <li><a href="#">Физиотерапия</a></li>
                        </ul>  
                    </div>
                    <div class="links-col">
                        <h3>Для пациента</h3>
                        <ul class="#">
                            <li><a href="#" class="recept-modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Запись на прием</a></li>
                            <li><a href="#">Вызов врача</a></li>
                            <li><a href="#">Подарочный сертификат</a></li>
                            <li><a href="#">Отзывы и предложения</a></li>
                            <li><a href="#">Статьи</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Документы</a></li>
                            <li><a href="#">Подготовки к исследованиям</a></li>
                            <li><a href="#">Справка для налоговой</a></li>
                        </ul> 
                    </div>
                </div>
                <table class="gos-links">
                    <tbody>
                        <tr>
                            <td class="img"><img src="img/1.png"></td>
                            <td class="link"><a href="#">Министерство здравоохранения Росcийской Федерации</a></td>
                            <td class="img"><img src="img/2.png"></td>
                            <td class="link"><a href="#">Министерство здравоохранения Свердловской области</a></td>
                        </tr>        
                        <tr>
                            <td class="img"><img src="img/3.png"></td>
                            <td class="link"><a href="#">Территориальный орган Росздравнадзора по Свердловской области</a></td>
                            <td class="img"><img src="img/4.png"></td>
                            <td class="link"><a href="#">Управление Федеральной службы по надзору в сфере защиты прав потребителей и благополучия человека по Свердловской области</a></td>
                        </tr>        
                    </tbody>
                </table>
                <div class="clear"></div> 
            </div>
        </div>
            <div class="page-wrapper transparent">
                <div class="credits">
                    <div class="footer-logo">
                        <img src="img/author-logo.jpg" width="40px" style="border-radius: 50%;">
                    </div>
                    <div class="author-data">
                        <p>Автор: Ефимов Денис ИС-41</p>
                        <p>© 2014-2022 Все права защищены</p>
                    </div>
                    <div class="counter">
                        <div class="social">
                            <a href="https://vk.com/starvikfapman" ><span class="icon"><svg class="svg-inline--fa fa-vk fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="vk" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="#"><path fill="currentColor" d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path></svg><!-- <i class="fab fa-vk"></i> --></span></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
    </body>
</html>