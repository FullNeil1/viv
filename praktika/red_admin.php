<?php

$u=0;
if(isset($_GET["u"])) {
$u = $_GET ["u"];
}

$conn = new mysqli('localhost', 'root', '', 'viv');

$sql = " SELECT * FROM korz where user=$u";
// join status_zak on korz.status=status_zak.id 
$result1 = $conn->query("SELECT * FROM korz");



if($result = $conn -> query($sql)){
$rowsCount = $result->num_rows;




echo '<section class=redact>';
echo '<div >';
echo '<form action="script/redact_admin_sc.php" method="post" enctype="multipart/form-data">';
echo '<input type="hidden" name="id" value="'.$row["id"]. '">';
echo '<div>' .$row["name_bludo"]. '</div>';
// echo '<input type="text" name="name_bludo" value="'.$row["name_bludo"]. '"><br><br>';
echo '<label for="user">Статус</label>';

$con = new mysqli('localhost', 'root', '', 'viv');
$sql1 = "SELECT * FROM status_zak";
$con->query($sql1);
if ($result = $con->query($sql1)) {
$rowsCount = $result->num_rows; 
if ($rowsCount > 0) {
echo "<select name=\"status\" size=\".$rowsCount\">";
foreach ($result as $row) {
echo "<option value=" . $row['id'] . ">" . $row['name'] . " ";
}
echo "</select><br><br>";
} else {
echo "Статус еще не придумали";
}
$result->free();
} else {
echo "Ошибка: " . $con->error;
}

echo '<input value ="Отправить" type="submit" class="redact2">';

echo '</form>';
echo '</div>';
echo '</section><br><br><br><br>';





} else {
echo "Ошибка:" . $conn->error;
}
$conn->close();
?>