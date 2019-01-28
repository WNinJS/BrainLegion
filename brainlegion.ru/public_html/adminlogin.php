<?
  require_once 'functions/functions.php';
?>
<!DOCTYPE html>
<html>
 	<head>
	    <meta charset="utf-8">
	    <title>BrainLegion Studio</title>

	    <!-- TODO: SEO -->
	    <!-- TODO: Теги у картинок -->
	    <!-- TODO: Модальные окна -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="res/bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="res/bootstrap/css/bootstrap-grid.min.css">
	    <link rel="stylesheet" href="res/bootstrap/css/bootstrap-reboot.css">

	    <!-- Fontello Fonts -->
	    <link rel="stylesheet" href="res/fontello/css/fontello.css">

	    <!-- Own Styles -->
	    <link rel="stylesheet" href="cssadmin/adminlogin.css">
	</head>
<body>
	<article class="container d-flex flex-column justify-content-center align-items-center h-100 w-100">
		<div class="row d-flex flex-column justify-content-center align-items-center">
			<img src="res/img/logos/brainlegion_main.svg" class="image img-thumb" alt="picture">
			<form method="POST" class="form d-flex flex-column align-items-center justify-center">
				<input name="login" class="my-1 w-100" type="text"placeholder="Введите логин">
				<input name="password" class="my-1 w-100" type="password" placeholder="Введите пароль">
			 <!-- ГАЗИНУР, тут вход находится, нужно проверить данные введеные с бд и если совпадает, то войти в админку -->
				<input name="logIn" type="submit" class="pointer btn btn-purple-outline my-1" value="Войти">
			</form>
		</div>
	</article>
</body>
</html>

<?
  $allDataOfPost = $_POST;
  $dataFromTableUsers = getFromOneTable('users');
  if(isset($allDataOfPost['logIn']))
  {
    $dataBoutRightAdmin; //Это массив будет
    for($i = 0; $i < count($dataFromTableUsers); $i++) //Данный цикл проверяет существуют ли такой логин, и походит лм он к паролю
    {
      if( $dataFromTableUsers[$i]['login'] == $allDataOfPost['login'] //Если сущетсвует такой логин
          && password_verify($allDataOfPost['password'], $dataFromTableUsers[$i]['password']) == 1) // И дешифрованный пароль подходит
      {
        $_SESSION['admin'] = $dataFromTableUsers[$i]; // Сессия запоминает данные о пользователе
        echo '<script>document.location.href="admininfo.php"</script>'; // Переход на главную страницу
      }
    }
  }
  $mysqli->close();
?>


<!--
<form method="POST" class="d-flex flex-column justify-content-sm-around align-items-center h-50 w-75">
	<input type="text" class="w-100">
	<input type="text" class="w-100">
	<button type="submit" class="btn btn-purple-outline"> Войти </button>
</form>

<div class="col-sm-5 d-flex flex-column align-items-center">

			</div>
-->
