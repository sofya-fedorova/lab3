<?php
  require_once __DIR__ . "/database/pdo.php";

$id_advertisement = 1;
$data = $dbh->prepare("SELECT * FROM user
inner join application ON (user.id_User = application.id_User)
where id_advertisement = ?");

$data->execute([$id_advertisement,]);

$phone = $data->fetchAll(PDO::FETCH_ASSOC);


?>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!doctype html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css\stayl.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <title>Детали</title>
  </head>
<body>
  <header id = "header" class = "header">
		<div class = "container">

			<div class="nav">
          <a href="index.php">
					<img src="img/logo.png" class="logo">
          </a>
					<img src="img/loc.png" class = "loc">
					<p class = "city">Липецк </p>

					<ul class = "menu">
						<li>
							<a href="index.php">
								Главная
							</a>
						</li>
						<li><a href="index2.php">
								Разместить объявление
							</a>
						</li>
					</ul>
					<div>
						<p class = "name">Здравствуйте, Альберт</p>
					</div>
					<div>
						<p class = "button2">Выход</p>
						<img src="img/enter.png" class="enter">
            <button class="menu-open">
              <img src="img/menu.svg" alt="">
            </button>
					</div>
			 </div>
		</div>
	</header>

  <section>
    	<div class = "container">
        <div class="description">

        <div class="photoDescription">
          <h4>Лошадь, 3.5 года</h4>
          <img src="img/Rectangle5.png" alt="Rectangle5" class="adve">
        </div>
        <div class="Information">
          <div class="InformationBut">

          <h4>110 000 ₽</h4>
          <button class="button Telephone">
            <span>Телефон: <br> +7-xxx-xxx-xx-xx </span>
            </button>
            <button class="button Respond">
              <span>Откликнуться</span>
              </button>
              <p class="text">Продам доморощенную кобылку, 3,5 года. Рост 164-167см, растёт. Родилась у нас, очень контактная, ручная. Заезжена, ничего особо не знает под верхом, только 3 аллюра. Очень спокойная, смелая. Мягкая под седлом, не тряская. Не таскает, не козлит. Сел и поехал. Подойдёт даже ребёнку. Бегает на корде, расчищается, колется. Руки будут проверяться.
                <br>
                <br>
                  Адрес: Липецкая область, Липецкий р-н, с. Ильино, Советская ул., 56.
              </p>
        </div>
      </div>
      </div>
      <div class="listResponders">
        <table  width="800" actiaon = "/index1.php" method = "post">
  <caption>Список откликнувшихся</caption>
  <thead>
    <tr>
      <th>ФИО пользователя</th>
      <th>Телефон</th>
    </tr>
  </thead>
 
<?php
             foreach ($phone as $k => $v) {
             echo '<tbody>
                <tr>
                  <td>'.$v['surname'].' '.$v['name'].' '.$v['patronymic'].'</td>
                  <td>'.$v['telephone'].'</td>
                </tr>
              </tbody>';}
?>
</table>

      </div>
      </div>
  </section>
  <footer>
    <div class="footer">
      <div class = "container">
        <div class="block">
        <div>
          <h6>Разработчики:</h6>
          <h6>почта почта почта почта почта</h6>
          <h6>почта почта почта почта почта</h6>
        </div>
        <div>
          <h6>Объявления.ru — сайт объявлений</h6>
        </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
