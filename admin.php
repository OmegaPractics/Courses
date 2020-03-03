<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses &#8211; образование</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
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
  
  
  
  <div id="dg">
	<div class="container">
		<h4>Список курсов</h4>	
		<a href="#add_course" class="popup">Добавить курс</a><br>		
		<?php /*					
				while ($note = mysqli_fetch_array($select_note)){
					?> 
					<div class="col-lg-4">
					  <div class="til">
						  <h4>
								<?php
									echo "$note['name_c'] <br>";
								?>
						  </h4>
						  <h5>
								<?php
									echo "$note['description_c'] <br>";
								?>
						  </h5>
						  <a href="#"><img src="img/start.jpeg" alt=""></a>
					  </div>
					</div>
			<?php 
			}*/?>	
	</div>
   </div>		
	
	
	
	
  <div id="admin">
	<div class="container">
		<h4>Список обучающихся</h4>
		<a href="#add_man" class="popup">Добавить студента</a><br>
		<h5>		
		<?php /*		
			while ($note = mysqli_fetch_array($select_note)){
				 echo "Имя: ";
				 ?> 
				 <a href="profile.php?note=<?php echo $note['id']; ?>"><?php echo $note ['name'];?></a>
				 <?php echo "; Почта: $note ['mail'] <br>";} 
				 */?>
		</h5>		 
	</div>
  </div>
  
  
  <div class="hidden">
		<form id="add_course">
			<input type="text" name="name_c" id="name_c" placeholder="Название курса"/><br>
			<input type="text" name="description_c" placeholder="Описание"/>
			<button id="add">Добавить</button>
		</form>
  </div>
  
  
  <div class="hidden">
		<form id="add_man">
			<input type="text" name="surname_m" id="name_c" placeholder="Фамилия"/><br>
			<input type="text" id="name_m" placeholder="Имя"/><br>
			<input type="text" id="phone_m" placeholder="Телефон"/>
			<input type="text" id="inst_m" placeholder="Учебное заведение"/>
			<select class="role">	
				<option value="1">Пользователь</option>	
				<option value="2">Администратор</option>
			</select>
			<button id="add">Добавить</button>
		</form>
  </div>
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/common.js"></script>
</body>
</html>