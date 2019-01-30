<?
  require 'functions/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>BrainLegion Admin</title>

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
        <link rel="stylesheet" href="res/styles.css">
        <link rel="stylesheet" href="cssadmin/adminmain.css">
    </head>
<body style="background-color: white;">
    <!-- Top Navigation -->
    <div class="container-fluid px-0 id="top-menu">
        <nav class="navbar  navbar-expand-lg navbar-light" id="top-menu">
            <!-- Logo -->
            <a href="adminpanel.php" class="navbar-brand">
                <img src="res/img/logos/brainlegion_main.svg" alt="FILL" class="img-fluid img-logo">
            </a>

            <!-- Menu Button for Mobile -->
            <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Itself -->
            <div class="collapse navbar-collapse text-right" id="navbar-toggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="adminmain.php" class="nav-link desible"><span>Главная</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="adminstudio.php" class="nav-link text-purple"><span>Studio</span></a>
                    </li>
                    <!-- Логаут и завершение сессии -->
                    <li class="nav-item">
                        <a href="logOut.php" class="nav-link text-purple"><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid h-100 w-100">
        <div class="row d-flex flex-column р-100 w-100" >
        <p class="dropChanges">
                <button class="btn btnSize btn-purple-outline pointer" data-toggle="collapse" href="#areaOfWork" aria-expanded="false" aria-controls="collapseExample">
                    Направления работы
                </button>
<!-- Газинур, кнопка добавления направления работы тут -->
                <button class="my-0 mx-2 btn btn-purple-outline pointer" data-toggle="modal" data-target="#addWorkField" aria-expanded="false"> +
                </button>
        </p>



            <div class="collapse" id="areaOfWork">
                <div class="card card-block dropChangesInfoField fieldChanges d-flex flex-wrap">
                  <?
                    $allDataFromWaysOfDev = getFromOneTable('waysOfDevelopment');
                    for($counter = 0; $counter < count($allDataFromWaysOfDev); $counter++)
                    {
                      echo '<div class="card-container col-sm-12 col-md-12 col-lg-4 p-2">
                              <div class="card card-half-transparent h-100 d-flex flex-column align-items-center">
                                <a href="'.$allDataFromWaysOfDev[$counter]['link'].'" class="card-img-logo "><img src="'.$allDataFromWaysOfDev[$counter]['logo'].'" class="img-fluid card-logo-style"  alt=""></a>
                                <div class="card-body d-flex flex-column text-center">
                                    <h4 class="card-title text-center"><b>'.$allDataFromWaysOfDev[$counter]['title'].'</b></h4>
                                    <p class="card-text">'.$allDataFromWaysOfDev[$counter]['description'].'</p>
                                    <br>
                                      <div class=" w-100 d-flex justify-content-around">
                                        <button type="button" class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#myModal'.$allDataFromWaysOfDev[$counter]['id'].'">Редактировать
                                        </button>
                                        <form action="" method="POST">
                                            <button name="deleteWay'.$allDataFromWaysOfDev[$counter]['id'].'" type="submit" class="btn btn-purple-outline pointer">Удалить
                                            </button>
                                        </form>
                                      </div>
                                </div>
                            </div>
                        </div>';
                    }
                  ?>
                </div>
            </div>

        <!-- NEWS TAB -->
            <p class="dropChanges">
                <button class="btn btn-primary btnSize btn-purple-outline btn-purple-outline:hover pointer" data-toggle="collapse" href="#news" aria-expanded="false" aria-controls="collapseExample">
                    Новости
                </button>
                <!-- Газинур, кнопка добавления новости тут -->
                <button class="my-0 mx-2 btn btn-purple-outline pointer" data-toggle="modal" data-target="#addNews" aria-expanded="false"> +
                </button>
            </p>
    <div class="collapse" id="news">
        <div class="card card-block dropChangesInfoField fieldChanges">
            <!-- News -->
            <div class="container mt-4 py-2">
                <!-- News Row -->
                <div class="row mx-auto mt-4 py-2">
                <!-- Новость1 -->
                <div class="card-container col-sm-12 col-md-6  col-lg-4 p-2">
                <div class="card card-half-transparent h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <img src="res\img\news\24.jpg" alt="ALT" class="img-fluid pb-3 news-img-style">
                        <h4 class="card-title text-center"><b>Детская форсайт школа</b></h4>
                        <p class="card-text">Команда модераторов BrainLegion приняла участие в работе и оказала содействие в организации форсайт школы «Инженеры будущего: 3D технологии в образовании».</p>
                        <div class="text-center mt-auto d-flex justify-content-around">
                            <button type="button" class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#New1">
                              Редактировать
                            </button>
                            <form action="" method="POST">
                                <button class="btn btn-purple-outline pointer" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Новость2 -->
                <div class="card-container col-sm-12 col-md-6 col-lg-4 p-2">
                <div class="card card-half-transparent h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <img src="res\img\news\дом.png" alt="ALT" class="img-fluid pb-3 news-img-style">
                        <h4 class="card-title text-center"><b>Что такое 3D-визуализация?</b></h4>
                        <p class="card-text">3D-визуализация – является неотъемлемой составляющей архитектурного проектирования, позволяющая графически создать экстерьер здания и интерьер помещений максимальной реалистичности.</p>
                        <div class="text-center mt-auto d-flex justify-content-around">
                            <button type="button" class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#New2">
                              Редактировать
                            </button>
                            <form action="" method="POST">
                                <button class="btn btn-purple-outline pointer" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Новость3 -->
                <div class="card-container col-sm-12 col-md-6 col-lg-4 p-2">
                <div class="card card-half-transparent h-100">
                    <div class="card-body d-flex flex-column text-center">
                        <img src="res/img/news/вирттур.jpg" alt="ALT" class="img-fluid pb-3 news-img-style" >
                        <h4 class="card-title text-center"><b>Получите подарок при заказе 3D-тура</b></h4>
                        <p class="card-text">Мы будем рады создать высококачественную панораму для Вашего бизнеса. До конца мая у нас действует специальное предложение, по которому можно получить карту тура в подарок. </p>
                        <div class="text-center mt-auto d-flex justify-content-around">
                            <button type="button" class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#New3">
                              Редактировать
                            </button>
                            <form action="" method="POST">
                                <button class="btn btn-purple-outline pointer" type="submit">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <!-- Top Navigation
    <script src="res/js/dropMenu.js"></script>
    -->


<?
  for($counter = 0; $counter < count($allDataFromWaysOfDev); $counter++)
  {
    echo '<div class="modal fade" id="myModal'.$allDataFromWaysOfDev[$counter]['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <form action="" method="POST">
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="title" class="col-form-label">Заголовок направления</label>
                        <input name="titleForEditWay" type="text" class="form-control" id="recipient-name" value="'.$allDataFromWaysOfDev[$counter]['title'].'">
                      </div>
                      <div class="form-group">
                        <label for="discription" class="col-form-label">Описание направления</label>
                        <textarea name="textForEditWay" class="form-control" id="message-text">'.$allDataFromWaysOfDev[$counter]['description'].'</textarea>
                      </div>
                      <div class="form-group">
                        <label >Выберите логотип направления</label>
                        <input type="text" name="logoForEditWay" class="form-control" value="'.$allDataFromWaysOfDev[$counter]['logo'].'">
                      </div>
                      <div class="form-group">
                        <label>Напишите на что будет ссылаться данная статья</label>
                        <input type="text" name="linkForEditWay" value="'.$allDataFromWaysOfDev[$counter]['link'].'">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                    <button name="editWay'.$allDataFromWaysOfDev[$counter]['id'].'" type="submit" class="btn btn-purple-outline pointer">Применить изменения</button>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>';
  }

  for($counter = 0; $counter < count($allDataFromWaysOfDev); $counter++)
  {
    $dataFromPost = $_POST;
    if(isset($dataFromPost['editWay'.$allDataFromWaysOfDev[$counter]['id']]))
    {
      $GLOBALS['mysqli']->query("UPDATE `waysOfDevelopment` SET `title` = '".$dataFromPost['titleForEditWay']."',
                                `description` = '".$dataFromPost['textForEditWay']."',
                                `logo` = '".$dataFromPost['logoForEditWay']."',
                                `link` = '".$dataFromPost['linkForEditWay']."' WHERE `waysOfDevelopment`.`id` = ".$allDataFromWaysOfDev[$counter]['id'].";");
      echo '<script>document.location.href="adminmain.php"</script>';
    }

    if(isset($dataFromPost['deleteWay'.$allDataFromWaysOfDev[$counter]['id']]))
    {
      $GLOBALS['mysqli']->query("DELETE FROM `waysOfDevelopment` WHERE `waysOfDevelopment`.`id` = ".$allDataFromWaysOfDev[$counter]['id'].";");
      echo '<script>document.location.href="adminmain.php"</script>';
    }
  }
?>

    <!-- MODALS FOR NEWS
        В них же записываются даннеы из БД с возможностью редактирования-->
<!-- Новость 1 -->
<div class="modal fade" id="New1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование новости</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
                  <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок новости</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="discription" class="col-form-label">Описание</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="form-group">
                      <div class="images">
                                <!-- ГАЗИНУР, это блок с изображениями и кнопками, которые удаляют изображения с базы данных -->
                                <div class="imgs d-flex justify-content-center">
                                    <img src="res\img\portfolio\devices\1.jpg" alt="ALT" class="img-fluid pb-3 news-img-style">
                                    <button type="button" class="close d-flex flex-column justify-content-start pointer" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label >Изображение</label>
                    <br>
                    <input type="file" name='logo'>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-purple-outline pointer">Сохранить изменения</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Новость 2 -->
<div class="modal fade" id="New2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование новости</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
                  <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок новости</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="discription" class="col-form-label">Описание</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="form-group">
                      <div class="images">
                                <!-- ГАЗИНУР, это блок с изображениями и кнопками, которые удаляют изображения с базы данных -->
                                <div class="imgs d-flex justify-content-center">
                                    <img src="res\img\portfolio\devices\1.jpg" alt="ALT" class="img-fluid pb-3 news-img-style">
                                    <button type="button" class="close d-flex flex-column justify-content-start pointer" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label >Изображение</label>
                    <br>
                    <input type="file" name='logo'>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-purple-outline pointer">Сохранить изменения</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Новость3 -->
<div class="modal fade" id="New3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактирование новости</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="" method="POST">
      <div class="modal-body">
                  <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок новости</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="discription" class="col-form-label">Описание</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="form-group">
                      <div class="images">
                                <!-- ГАЗИНУР, это блок с изображениями и кнопками, которые удаляют изображения с базы данных -->
                                <div class="imgs d-flex justify-content-center">
                                    <img src="res\img\portfolio\devices\1.jpg" alt="ALT" class="img-fluid pb-3 news-img-style">
                                    <button type="button" class="close d-flex flex-column justify-content-start pointer" aria-label="Close">
                                        <span>&times;</span>
                                    </button>
                                </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label >Изображение</label>
                    <br>
                    <input type="file" name='logo'>
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-purple-outline pointer">Сохранить изменения</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- MODALS FOR ADDING + -->
<!-- Modal for adding work field -->
   <div class="modal fade" id="addWorkField" tabindex="-1" role="dialog" aria-labelledby="modalPortfolio_addLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-items-center" id="exampleModalLabel"> Добавить направление </h5>
                    <button type="button" class="close pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">

                        <!-- тут заголовок, который добавляется в бд -->
                        <div class="form-group">
                            <label for="title" class="col-form-label">Название направления</label>
                            <input type="text" name="titleForAddWay" class="form-control" id="title">
                        </div>

                        <!-- тут описание добавляется в бд -->
                        <div class="form-group">
                            <label for="discriptionPortfolio" class="col-form-label">Описание направления</label>
                            <textarea class="form-control" name="textForAddWay" id="discriptionPortfolio"></textarea>
                        </div>
                        <div class="form-group">
                          <label >Выберите логотип направления</label>
                          <input type="text" name="logoForAddWay" class="form-control" >
                        </div>
                        <div class="form-group">
                          <label>Напишите на что будет ссылаться данная статья</label>
                          <input type="text" name="linkForAddWay" class="form-control" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                        <!-- По нажатию на эту кнопку все данные отсюда добавляются в бд и отображаются на сайте -->
                        <button type="submit" name="addWay" class="btn btn-purple-outline pointer">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?
      if(isset($_POST['addWay']))
      {
        $GLOBALS['mysqli']->query("INSERT INTO `waysOfDevelopment`(`title`, `description`, `logo`, `link`)
                                  VALUES ('".$_POST['titleForAddWay']."',
                                          '".$_POST['textForAddWay']."',
                                          '".$_POST['logoForAddWay']."',
                                          '".$_POST['linkForAddWay']."')");
        echo '<script>document.location.href="adminmain.php"</script>';
      }
    ?>

<!-- MODAL FOR ADDING NEWS -->
   <div class="modal fade" id="addNews" tabindex="-1" role="dialog" aria-labelledby="modalPortfolio_addLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-items-center" id="exampleModalLabel"> Добавить новость </h5>
                    <button type="button" class="close pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">

                        <!-- ГАЗИНУР, тут заголовок, который добавляется в бд -->
                        <div class="form-group">
                            <label for="title" class="col-form-label">Название новости</label>
                            <input type="text" class="form-control" id="title">
                        </div>

                        <!-- ГАЗИНУР, тут описание добавляется в бд -->
                        <div class="form-group">
                            <label for="discriptionPortfolio" class="col-form-label">Описание новости</label>
                            <textarea class="form-control" id="discriptionPortfolio"></textarea>
                            <label for="">Изображение</label>
                            <br>
                            <input type="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                        <!-- По нажатию на эту кнопку все данные отсюда добавляются в бд и отображаются на сайте -->
                        <button type="submit" class="btn btn-purple-outline pointer">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
