<?
    require_once('connect.php');
    // Get Autorized User NickName
    $user_nick = "SELECT `login` FROM `users`";
    $user_nick_d = $pdo->query($user_nick);
    $user_nick_l = $user_nick_d->fetchAll();
    // Get All Users Login For Ajax Free Login
    $all_users = "SELECT `login` FROM `users`";
    $all_users_d = $pdo->query($all_users);
    $all_users_l = $all_users_d->fetchAll();
?>