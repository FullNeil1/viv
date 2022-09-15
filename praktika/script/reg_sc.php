<?php

if(isset($_POST["register"])){
$email=htmlspecialchars($_POST['email']);
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$password_hash = md5($password);
$con = new mysqli("localhost", "root", "", "viv");
$query=mysqli_query($con,"SELECT * FROM usertbl WHERE username='".$username."'");
$numrows=mysqli_num_rows($query);
if($numrows==0)
{
// $sql="INSERT INTO usertbl
// (full_name, email, username,password, role)
// VALUES('".$full_name."','".$email."', '".$username."', '".$password_hash."', '1')";

$sql="INSERT INTO `usertbl` (`id`,`username`, `password`, `email`, `role`) 
VALUES (NULL , '$username', '$password_hash ', '$email', '1');";



$result=mysqli_query($con, $sql);
if($result){
$message = "Account Successfully Created";
}
else {
$message = "Failed to insert data information! SQL query:".$sql;

}
}
else {
$message = "That username already exists! Please try another one!";
}
}
else {
$message = "All fields are required!";
}



if (!empty($message))
{
echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";
}


header('Location: /login.php');
?>