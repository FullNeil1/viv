<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Меню</title>

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
                <li><a href="#">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="onas.html">О нас</a></li>
                <li><a href="login.php">Личный кабинет</a></li>
              </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="index.html">Главная</a></li>
                <li><a href="#">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="onas.html">О нас</a></li>
                <li><a href="login.php">Личный кабинет</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div class="container">
      <div class="section">
      <h1 class="center">Новое меню</h1>
      </div>
    </div>

    <div class="container">
<div class="section">
<div class="row">
 

<?php



$conn = new mysqli('news', 'root', '', 'viv');

$sql = "SELECT * FROM menu";

if($result = $conn -> query($sql)){
$rowsCount = $result->num_rows;

foreach($result as $row){

  echo '<div class="col s6 m3 ">';
  echo '<div class="blud">';
  // echo '<h2 class="center brown-text"><img class="responsive-img-1" src="img/Блюда/люля 1.png"></h2>';
  echo "<img  class='materialboxed' src=" . $row["img"] . " width='100%'   >";;
  echo '';
  echo '<h5 class="center hd ">'; 
  echo $row['name_bl'];;
  echo '</h5>';
  echo '<br> ';
  echo '<h4  class="light"> ';
  echo $row['price'];;
  echo ' ₽';
    echo '</h4>';
  echo '';
  echo "<a href=korzina.php class='btn waves-effect waves-yellow'>Добавить</a>";


  echo '</div>';
  echo '</div>';
  
  


}


$result->free();
} else {
echo "Ошибка:" . $conn->error;
}


?>
</div>
</div>
</div>

<!-- <div class="container">
    <div class="section">
    <h1 class="center">Новое меню</h1> 
    
    <div class="row">
    <div class="col s6 m3">
    <div class="blud">
    <h2 class="center brown-text"><img class="responsive-img-1" src="img/Блюда/люля 1.png"></h2>
    
    <h5 class="center">Люля-Кебаб из растительного хайбиф фарша Hi</h5>
    
    <br><br><br>
    <p class="light"> <h5>480 ₽</h5>
    
    <a href="" class="waves-effect waves-light btn">Добавить</a>
   
    
    </p>
    </div>
    </div>
</div>
</div>
</div> -->






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