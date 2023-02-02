<?php
    session_start();
    require_once('../db/connect.php');
    // get all specs
    $all_data = "SELECT * FROM `doctor_speciality`";
    $all_data_d = $pdo->query($all_data);
    $all_data_l = $all_data_d->fetchAll();
    foreach ($all_data_l as $spec) {
        echo "<option value='".$spec['spec_name']."'>".$spec['spec_name']."</option>";
    }
?>