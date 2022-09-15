



<?php
$phon = filter_var(trim($_POST['phon']), FILTER_SANITIZE_STRING);
$adres = filter_var(trim($_POST['adres']), FILTER_SANITIZE_STRING);
$name_bludo = filter_var(trim($_POST['name_bludo']), FILTER_SANITIZE_STRING);

if (!isset($_COOKIE['id'])) {
echo "Вы не авторезированы";
exit();
}
$id=$_POST['id'];

$conn = new mysqli('praktika', 'root', '', 'viv');

$conn->query("UPDATE `korz` SET `phon`='$phon',`adres`='$adres' WHERE `id`='$id'");






?>


