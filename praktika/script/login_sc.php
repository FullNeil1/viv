<?php
$UserName = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$UserPass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$UserPass = md5($UserPass);


$conn = new mysqli('localhost', 'root', '', 'viv');
$result1 = $conn->query("SELECT * FROM `usertbl` WHERE `username` = '$UserName'
AND `password` = '$UserPass'");

$username = $result1->fetch_assoc();
if (count($username) == 0) {
echo "Такой пользователь не найден";
exit();
}
 
setcookie('username', $username['username'], time() + 360000, "/");
setcookie('id', $username['id'], time() + 360000, "/"); 
setcookie('role', $username['role'], time() + 360000, "/");
setcookie('email', $username['email'], time() + 360000, "/");
$conn->close();

header('Location: /profil.php');

?>