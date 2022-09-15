<?php

if (!isset($_COOKIE['role'])) {
echo "Вы не авторезированы";
exit();
}

$id=$_POST['id'];
$status=$_POST['status'];
$conn=new mysqli('localhost', 'root', '', 'viv');

$conn->query("UPDATE `korz` SET `status`='$status' WHERE `id`='$id'");

if ($result = $conn->query) {

}

else {
    echo "Ошибка: " . $conn->error;
    }
?>