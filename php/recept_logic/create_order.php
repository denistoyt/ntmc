<?php
    require_once('../db/connect.php');
    $date = date('Y-m-d H:i:s');
    $order = "INSERT INTO `orders` SET `order_type` = ?, `order_way` = ?, `order_date` = ?, `patient_name` = ?, `patient_secname` = ?, `patient_lastname` = ?, `patient_born` = ?, `patient_tel` = ?, `recept_date` = ?, `recept_time` = ?, `doctor_spec` = ?, `doctor_sfl` = ?";
    $order_data = $pdo->prepare($order);
    $order_data->execute(array("$_POST[recept_way]", "$_POST[recept_age]", "$date", "$_POST[patient_recept_name]", "$_POST[patient_recept_secname]", "$_POST[patient_recept_lastname]", "$_POST[patient_recept_birth]", "$_POST[patient_recept_tel]", "$_POST[doctor_recept_date]", "$_POST[doctor_recept_time]", "$_POST[spec_select]", "$_POST[doctors_sfl]"));
?>