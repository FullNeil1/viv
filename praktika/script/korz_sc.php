<?php
$user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
$adres = filter_var(trim($_POST['adres']), FILTER_SANITIZE_STRING);
$phon = filter_var(trim($_POST['phon']), FILTER_SANITIZE_STRING);
$name_bludo = filter_var(trim($_POST['name_bludo']), FILTER_SANITIZE_STRING);

if (!isset($_COOKIE['username'])) {
echo "Вы не авторезированы";
exit();
}
$user = $_COOKIE['id'];



$conn = new mysqli('localhost', 'root', '', 'viv');
if ($conn) {
    echo "Подключение есть $phon $adres";
    }
    else {
        echo "Подключения нет)";
    }
$conn->query("INSERT INTO `korz`(`user`, `phon`, `adres`, `name_bludo`, `status`)
 VALUES ('{$user}','{$phon}','{$adres}','{$name_bludo}','1');");





header('Location: /profil.php');

?>