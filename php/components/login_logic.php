<?
    session_start();
    require_once('../db/connect.php');
    if(isset($_GET['profile-login-btn'])) {
        if($_GET['profile-login'] != '' and $_GET['profile-password'] != '') {
            $safe_login = $_GET['profile-login'];
            $safe_pass = md5($_GET['profile-password']);
            $sql = "SELECT * FROM `users` WHERE `login` like ? and `password` like ?";
            $result = $pdo->prepare($sql);
            $result->execute(array("$safe_login", "$safe_pass"));
            $line2 = $result->fetchAll();
            $count = count($line2);
            if($count > 0) {
                $_SESSION['login'] = $_GET['profile-login'];
                $_SESSION['autorized'] = true;
                header('location: profile.php');
            }
            else {
                die("<span class='wrong_data_text'>Неверные данные для входа!</span>");
            }
        }
    }
?>