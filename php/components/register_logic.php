<?
    session_start();
    require_once('../db/connect.php');
    if(isset($_GET['profile_register_btn'])) {
        $safe_login = $_GET['register_login'];
        $safe_pass = md5($_GET['register_password']);
        $safe_pass_confirm = md5($_GET['register_confirm_password']);
        if($safe_pass != $safe_pass_confirm) {
            echo "Пароли не совпадают!";
        }
        else {
            $sql = "INSERT INTO `users` SET `login` = ?, `password` = ?, `first_name` = ?, `second_name` = ?, `last_name` = ?, `tel` = ? ";
            $result = $pdo->prepare($sql);
            $result->execute(array("$safe_login", "$safe_pass", "$_GET[register_name]", "$_GET[register_sec_name]", "$_GET[register_last_name]", "$_GET[register_tel]"));
            $line2 = $result->fetchAll();
            header('location: ../../index.php');
        }
    }
?>