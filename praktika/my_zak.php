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

$conn = new mysqli('praktika', 'root', '', 'viv');

$sql = "SELECT * FROM korz join status_zak on korz.status=status_zak.id where user = $u";

if($result = $conn -> query($sql)){
$rowsCount = $result->num_rows;
echo "<table><tr><th>Название блюда</th><th>Адрес</th><th>Номер телефона</th><th>Статус</th></tr>";
foreach($result as $row){


echo "<tr>";
echo "<td>" . $row['name_bludo'] . "</td>";
echo "<td>" .$row['adres'] ."</td>";
echo "<td>" .$row['phon'] ."</td>";
echo "<td>" .$row['name'] ."</td>";
echo "</tr>";

// echo "</tr>";

}
echo "</table>";
echo "<br>";
echo "<br>";
// echo '<a class="btn waves-effect waves-yellow" href="http://praktika/red_zay.php?u=" .$u. "\"> Редактировать</a>';
echo '<a class="btn waves-effect waves-yellow" href="http://praktika/red_zay.php?u='.$u.'"> Редактировать </a>' ;
// echo "<td class='td' > <a class='buton007' href=\"http://news/delete.php?u=" .$u. "\"> Удалить</a></td>";

$result->free();
} else {
echo "Ошибка:" . $conn->error;
}


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




