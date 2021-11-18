
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Объявления</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>	
	<header id = "header" class = "header">
		<div class = "container">

			<div class="nav">
				
					<img src="img/logo.png" class = "logo">
					<img src="img/loc.png" class = "loc">
					<p class = "city">Липецк </p>
				
					<ul class = "menu">
						
						<li><a href="index2.php">
								Разместить объявление
							</a>
						</li>		
						<li>
							<button type="button" id = "Button_Reg">Регистрация</button>
						</li>	
						<li>
							<button type="button" id = "Button_Enter">Вход</button>
						</li>		

						<li>
							<button type="button" id = "Button_Exit" style="display:none">Выход</button>
						</li>		
					</ul>
				
					<button class="menu-open">
              <img src="img/menu.svg">
          </button>
			 </div>
		</div>		
	</header>

	<section id="about" class="about">
		<div class = "container">		
			<h1>Удачный выбор для всех и для каждого</h1>	
			<p class="p1">Найди свое среди тысячи товаров!</p>
			<a href="index2.php"><button type="button" class = "mainbut">
								Разместить объявление
							</button></a>
		</div>
			
	</section>
	<section>
		<div class = "container">
			<div class = "cards">
				<a href="index1.php">
				<div class ="card">				
					<div class = "inside"> 					
						<p>Квартира</p>
						<img src="img/flat.png" class="img">
						<p>22 000 ₽ в месяц</p>
					</div>	
					<img src="img/card.png" class ="imgcard">
				</div>
			</a>
				<a href="index1.php">
				<div class ="card">				
					<div class = "inside"> 					
						<p>ВАЗ 2115 Samara</p>
						<img src="img/car.png" class="img">
						<p>74 800 ₽</p>
					</div>	
					<img src="img/card.png" class ="imgcard">
				</div>
			</a>
				<a href="index1.php">
				<div class ="card">				
					<div class = "inside"> 					
						<p>Лошадь, 3.5года</p>
						<img src="img/horse.png" class="img">
						<p>110 000 ₽</p>
					</div>	
					<img src="img/card.png" class ="imgcard">
				</div>
			</a>
			</div>		
		</div>	
	</section>

	<footer id = "footer">
		<div class="container">
			<div class ="text">
				<p class="mail">Разработчики:<br>
					sofya-fedorova-2014@mail.ru<br>
					albert.e.m@mail.ru
				</p>
				<p class="mail">
					Объявления.ru — сайт объявлений
				</p>
			</div>
		</div>
	</footer>
<div id="zatemnenie" style="display:none"></div>
      <div id="okno" style="display:none">
        <p>Вход</p>
        	<img src="img/cross.png" class = "cross">
	        <form> <input type="text" class = "name" placeholder = "Введите логин"> </form>
	    
	    	<div class = "textbox">
	        	<form> <input type="password"  class = "pword" placeholder = "Введите пароль"> </form>
	    	</div>
        	<button type="button" id = "logIN" class = "newbut">Войти</button>
        	 </div>
        
      <div id="okno2" style="display:none">

        <p>Регистрация</p>
        <img src="img/cross.png" class = "cross1">

	        <form> <input type="text" class="new_name" placeholder = "Введите имя"> </form>
	    
<div class = "textbox">
	        <form> <input type="text" class="new_email" placeholder = "Введите фамилию"> </form>
	    </div>

	    <div class = "textbox">
	        <form> <input type="text" class="" placeholder = "Введите отчество"> </form>
	    </div>

	    <div class = "textbox">
	        <form> <input type="text" class="new_email" placeholder = "Введите email"> </form>
	    </div>
	    <div class = "textbox">
	        <form> <input type="text" class="new_phone" placeholder = "Введите телефон"> </form>
	    </div>
	    <div class = "textbox">
	        <form> <input type="password" class="new_password" placeholder = "Введите пароль"> </form>
	    </div>
	    <div class = "textbox">
	        <form> <input type="password" class="new_password_again" 
	        	placeholder = "Повторите пароль"> </form>
	    </div>

 
			    <div class="yes">
	    	<input type="checkbox" class="check_box"> <p class ="agree">Согласие на обработку данных</p>

</div>    
        	<button  type="button" id = "Register" class = "newbut" >Зарегистрироваться</button>
      </div>
    </div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>