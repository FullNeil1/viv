
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Профиль</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body class="menuu">
    <nav class="сolor" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class="brand-logo">
                <img class="responsive-img" src="img/Лого 1.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="onas.html">О нас</a></li>
                <li><a href="profil.php">Личный кабинет</a></li>
                <li><a href="script/logout_sc.php">Выйти</a></li>
                <li><a href="korzina.php">Корзина</a></li>
              </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="index.html">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="onas.html">О нас</a></li>
                <li><a href="profil.php">Личный кабинет</a></li>
                <li><a href="script/logout_sc.php">Выйти</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div id="index-banner" class="black-text parallax-container">
        <div class="section no-pad-bot ">
            <div class="container ">          
                  </div>
        </div>

    <div class="container">
        <div class="section">
            <div class="col s6 center " >
                <p>

<?php
$u=0;
if(isset($_GET["u"])) {
$u = $_GET ["u"];
}

$conn = new mysqli('localhost', 'root', '', 'viv');

$sql = " SELECT * FROM korz join status_zak on korz.status=status_zak.id where user = $u";

$result1 = $conn->query("SELECT * FROM korz");



if($result = $conn -> query($sql)){
$rowsCount = $result->num_rows;

foreach($result as $row){


echo '<section class=redact>';
echo '<div >';
echo '<form action="red_zay_sc.php" method="post" enctype="multipart/form-data">';
echo '<input type="hidden" name="id" value="'.$row["id"]. '">';
echo '<input type="text" name="phon" value="'.$row["phon"]. '"><br><br>';
echo '<input type="text" name="adres" value="'.$row["adres"] .'" ><br><br>';


// $sql1 = "SELECT * FROM cat_zay ";
// $con->query($sql1);
// if ($result = $con->query($sql1)) {
// $rowsCount = $result->num_rows; 
// if ($rowsCount > 0) {
// echo "<select name=\"cat_zay\" size=\".$rowsCount\">";
// foreach ($result as $row) {
// echo "<option value=" . $row['id'] . ">" . $row['name'] . " ";
// }
// echo "</select><br><br>";
// } else {
// echo "Категории не найдены";
// }
// $result->free();
// } else {
// echo "Ошибка: " . $con->error;
// }

echo '<button type="submit" class="btn waves-effect waves-yellow">Отправить</button>';

echo '</form>';
echo '</div>';
echo '</section><br><br><br><br>';


}


} else {
echo "Ошибка:" . $conn->error;
}
$conn->close();
?>


</p>
            </div>
        </div>
    </div> 
</div>
    <footer class="page-footer">
    <div class="container">
      <div class="row">
          <ul>
            <a class="col s3 black-text text-lighten-3" href="index.html">Главная</a>
            <a class="col s3 black-text text-lighten-3" href="menu.php">Меню</a>
            <a class="col s3 black-text text-lighten-3" href="contakt.html">Контакты</a>
            <a class="col s3 black-text text-lighten-3" href="onas.html">О нас</a>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      ©2022 www.viv.ru. Все права защищены.
      <a class="grey-text text-lighten-4 right" href="#!"><img class="responsive-img" src="img/икона_тг.png"></a>
      <a class="grey-text text-lighten-4 right" href="#!"><img class="responsive-img" src="img/вк.png"></a>
      <div class="container">

    </div>
    </div>
  </footer>
  
  
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  
    </body>
  </html>
