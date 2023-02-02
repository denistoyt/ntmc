<?
    function uploadImg($file) {
        // Получаю текущего пользователя системы, чтобы сохранить файл
        $user = get_current_user();
        // Заношу значение пути к папке
        $folder = "C:/Users/$user/Downloads/";
        // Генерация имени сохраняемого файла
        $filename = "Прайс-лист.xls";
        // Загрузка сгенерированного файла в нужную папку
        copy("G:/openserver/domains/IS41/nt-mc-ajax/bin/uploads/$file", "$folder".$filename);
        // Открытие проводника после сохранения
        exec("start \"\" \"$folder\"");
        return $filename;
    }
    $filename = uploadImg('../uploads/price_list.xls');
    header('location: ../../index.php');
?>