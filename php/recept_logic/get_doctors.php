<?php
    session_start();
    require_once('../db/connect.php');
     // Берем специальность врача
    $spec = $_POST['spec_select'];
     // Запрос
    $doc = "SELECT doctors.doctor_sfl FROM `doctor_speciality` INNER JOIN `doctors` ON doctor_speciality.spec_id = doctors.id_spec WHERE doctor_speciality.spec_name = '".$spec."'";
    $doc_d = $pdo->query($doc);
    $doc_l = $doc_d->fetchAll();
     // Вывод в поле ФИО 
    foreach($doc_l as $doc) {
        echo "<option value='".$doc['doctor_sfl']."'>".$doc['doctor_sfl']."</option>";
    }
?>