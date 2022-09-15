<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Личный кабинет</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
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
                <li><a href="#">Личный кабинет</a></li>
              </ul>


            
          
            <ul id="nav-mobile" class="sidenav">
                <li><a href="index.html">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="onas.html">О нас</a></li>
                <li><a href="#">Личный кабинет</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    
    <!-- <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                

        
            </div>
        </div> 
    </div>
    </div> -->

<?php

if($_COOKIE['role']=='1' ):

header('Location: /profil.php');

else:


if($_COOKIE['role']=='2' ):
header('Location: /admin.php');
else:
?>

    <div class="login-page">
        <div class="form">
          <form action="script/reg_sc.php" method="POST" class="register-form">
            <input type="text" name="username" id="username" placeholder="Имя пользователя"/>
            <input type="password" name="password" id="password" placeholder="Пароль"/>
            <input type="email" name="email" id="email" placeholder="email"/>
            <input type="submit" name="register" id="register" value="Зарегестрироваться"/>
            <p class="message">Already registered? <a href="#">Войти</a></p>
          </form>
          <form action="script/login_sc.php" method="POST"  class="login-form">
            <input type="text" name="username" id="username" placeholder="Имя пользователя"/>
            <input type="password" name="password" id="password" placeholder="Пароль"/>
            <button>Войти</button>
            <p class="message">Нет аккаунта? <a href="#">Зарегестрироваться</a></p>
          </form>
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
      
      <?php
    endif;
    endif;
      ?>

      </body>
    </html>
    