<?
    session_start();
    require_once('../db/connect.php');
    include('login_logic.php');
    // Get User Data
    $user_data_q = "SELECT * FROM `users` WHERE `login` = ?";
    $user_data_d = $pdo->prepare($user_data_q);
    $user_data_d->execute(array("$_SESSION[login]"));
    $user_data_l = $user_data_d->fetchAll();
    foreach($user_data_l as $user) {
        $user_name = $user['first_name'];
        $user_secname = $user['second_name'];
        $user_lastname = $user['last_name'];
        if($user['born_date'] != "") {
            $user_born = date('d.m.Y', strtotime($user['born_date']));
        }
        $user_polis = $user['polis'];
        $user_snils = $user['snils'];
        $user_tel = $user['tel'];
    }
    // Get Order Data
    $order = "SELECT * FROM `orders` WHERE `patient_name` = ? and `patient_secname` = ? and `patient_lastname` = ? and `patient_tel` = ?";
    $order_d = $pdo->prepare($order);
    $order_d->execute(array("$user_name", "$user_secname", "$user_lastname", "$user_tel"));
    $order_l = $order_d->fetchAll();
    
    
?>