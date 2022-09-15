<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Korzina</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/korz.css" type="text/css" rel="stylesheet" media="screen,projection" />
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
                <li><a href="login.php">Личный кабинет</a></li>
              </ul>


            
          
            <ul id="nav-mobile" class="sidenav">
                <li><a href="index.html">Главная</a></li>
                <li><a href="menu.php">Меню</a></li>
                <li><a href="contakt.html">Контакты</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="login.php">Личный кабинет</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    
    <!-- <div class="container">
      <div class="section">
        <div class="row">

        <form action="script/korz_sc.php" method="POST" class="register-form">
            <input type="text" name="username" id="username" placeholder="Имя пользователя"/>
            <input type="text" name="phon" id="phon" placeholder="phone"/>
            <input type="text" name="adres" id="adres" placeholder="adres"/>
            <input type="submit" name="register" id="register" value="Отправить"/>
          </form>

        </div>
      </div>
    </div> -->
<!-- <a href="korzina.php" class="btn waves-effect waves-yellow">Заказать</a> -->
    
    <div class="container text-black">
    <div class="row text-black">
    <form  action="script/korz_sc.php" method="POST" class="col s12">
      <div class="row text-black">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="username" id="username" placeholder="Имя пользователя"/>
          <label for="icon_prefix">ФИО</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input type="text" name="phon" id="phon" placeholder="Ваш номер телефона"/>
          <label for="icon_telephone">Телефон</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix ">domain</i>
          <input type="text" name="adres" id="adres" placeholder="Ваш адрес"/>
          <label for="icon_telephone">Адрес</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix ">local_dining</i>
          <input type="text" name="name_bludo" id="name_bludo" placeholder="Название блюда"/>
          <label for="icon_telephone">Выбор блюда</label>
        </div>
      </div>
      <input type="submit"  class="btn waves-effect waves-yellow" name="register" id="register" value="Отправить"/>
    </form>
  </div>

    </div>


    <div id="index-ba nner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
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
  