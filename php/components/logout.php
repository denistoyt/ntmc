<?
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['autorized'] = false;
    header('location: ../../index.php');
?>