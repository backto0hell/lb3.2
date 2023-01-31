<?php
switch ($_GET['select']){
    case "Яндекс":
        $isQueryEmpty = (empty($_GET['value'])) ? true : false;
        if (!$isQueryEmpty) {
            $url = "https://yandex.ru/search/?text=".$_GET['value'];
            header("Location: $url");
        } else {
            header("Location: https://yandex.ru");
        }
        break;
    case "Гугел":
        $isQueryEmpty = (empty($_GET['value'])) ? true : false;
        if (!$isQueryEmpty) {
            $url = "https://www.google.ru/search?q=".$_GET['value'];
            header("Location: $url");
        } else {
            header("Location: https://www.google.ru");
        }
        break;
    case "Мыло ру":
        $isQueryEmpty = (empty($_GET['value'])) ? true : false;
        if (!$isQueryEmpty) {
            $url = "https://mail.ru/search?text=".$_GET['value'];
            header("Location: $url");
        } else {
            header("Location: https://mail.ru");
        }
        break;
} 
?>
