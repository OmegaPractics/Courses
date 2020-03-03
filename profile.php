<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses &#8211; образование</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">C<i class="fa fa-circle"></i>URSES</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="about_company.php">О нас</a></li>
          <li><a href="courses_online.php">Курсы онлайн</a></li>
          <li><a href="contacts.php">Контакты</a></li>
          <li class="active"><a href="#">Войти</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-9 col-lg-offset-2">
          <h1>Прокачай себя с Courses</h1>
          <h2>Курсы по развитию интеллекта</h2>
        </div>
      </div>
    </div>
  </div>
  
  <div id="user">
	<div class="container">
		<h4>Профиль</h4>
			<h5>
			<?php
				echo "Имя: $note ['name'] <br>";
				echo "Фамилия: $note ['surname'] <br>";
				echo "Возраст: $note ['age'] <br>";
				echo "Почта: $note ['mail'] <br>";				
			?>
			</h5>
	</div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>