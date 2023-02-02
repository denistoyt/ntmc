<?php
    session_start();
    require_once('../db/connect.php');
    // get doct
    $doct = $_POST['doct'];
    $doc = "SELECT `doctor_cab` FROM `doctors` WHERE `doctor_sfl` = '".$doct."'";
    $doc_d = $pdo->query($doc);
    $doc_l = $doc_d->fetchAll();
    foreach($doc_l as $doc) {
        echo "<option value='".$doc['doctor_cab']."'>".$doc['doctor_cab']."</option>";
    }
?>