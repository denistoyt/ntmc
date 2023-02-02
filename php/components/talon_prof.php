<?
    require_once('../db/connect.php');
    // Get Talon Data
    $id = $_POST['order_id'];
    $talon = "SELECT `patient_name`, `patient_secname`, `patient_lastname`, `recept_date`, `recept_time`, `doctor_spec`, `doctor_sfl` FROM `orders` WHERE `id` = '".$id."'";
    $talon_d = $pdo->query($talon);
    $talon_l = $talon_d->fetchAll();
    foreach($talon_l as $talon) {
        echo "<p>".$talon['doctor_sfl']."</p>";
    }
?>