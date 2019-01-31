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
    </head>
<body>

    <!--Top menu Selection -->
    <section class="container-fluid sticky-top-desktop px-0" id="top-menu">

        <!-- Top Navigation -->
        <div class="container-fluid px-0 id="top-menu">
            <nav class="navbar navbar-expand-lg navbar-light" id="top-menu">

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
                            <a href="adminmain.php" class="nav-link text-purple"><span>Главная</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="adminstudio.php" class="nav-link disabled"><span>Studio</span></a>
                        </li>

                        <!-- Логаут и завершение сессии -->
                        <li class="nav-item">
                            <a href="logOut.php" class="nav-link text-purple"><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Button menu selection -->
    <section class="container-fluid mt-5 d-flex justify-content-center">
        <div class="row d-flex justify-content-center text-center">
            <div class="d-flex flex-column flex-start">

                <!-- Button collapseServices -->
                <div class="ServicesAddandEdit d-flex flex-start">
                    <button class="mx-2 my-2 btn btn-purple-outline pointer btnsize" data-toggle="collapse" data-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices"> Услуги </button>

                    <!--ГАЗИНУР, кнопка открывает модальльное окно, где происходит добавление новой услуги-->
                    <button class="my-2 btn btn-purple-outline pointer" data-toggle="modal" data-target="#modalService_add" aria-expanded="false"> + </button>
                </div>

                <!-- Collapse Services -->
                <div class="collapse mx-auto" id="collapseServices">
                    <div class="card-container">
                        <div class="card card-half-transparent mt-auto h-100 d-flex flex-wrap flex-row align-items-center">

                            <!-- тут добавляются, изменяются услуги, которые выводятся на страничке Studio.php -->
                            <?
                              $allDataAboutServices = getFromOneTable('services');
                              for($counter = 0; $counter < count($allDataAboutServices); $counter++)
                              {
                                echo '<div class="card-body col-12 col-sm-6 col-md-4 d-flex flex-column text-center heightCards">
                                        <h4><b>'.$allDataAboutServices[$counter]['title'].'</b></h4>
                                        <p class="card-text">'.$allDataAboutServices[$counter]['description'].'</p>
                                        <div class="buttonServices d-flex flex-row justify-content-around mt-auto">
                                          <button type="button" class="btn btn-purple-outline mt-auto btnsize pointer" data-toggle="modal" data-target="#modalService_'.$allDataAboutServices[$counter]['id'].'">Редактировать</button>
                                          <form method="POST">
                                              <button name="serviceDelete'.$allDataAboutServices[$counter]['id'].'"class="btn btn-purple-outline btnsize mt-auto pointer">Удалить</button>
                                          </form>
                                        </div>
                                    </div>';
                              }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Button collapsePortfolio -->
                <div class="PortfolioAddandEdit d-flex flex-start">
                    <button class="mx-2 my-2 btn btn-purple-outline pointer btnsize pointer" data-toggle="collapse" data-target="#collapsePortfolio" aria-expanded="false" aria-controls="collapsePortfolio">Портфолио</button>

                    <!--ГАЗИНУР, кнопка открывает модальльное окно, где происходит добавление новой работы в портфолио -->
                    <button class="my-2 btn btn-purple-outline pointer pointer" data-toggle="modal" data-target="#modalPortfolio_add" aria-expanded="false">+</button>
                </div>


                <div class="collapse" id="collapsePortfolio">
                    <div class="card-container">
                        <div class="card card-half-transparent h-100 d-flex flex-wrap flex-row align-items-center">
                          <?
                            $allDataAboutPorfolio = getFromOneTable('portfolio');
                            for($counter = 0; $counter < count($allDataAboutPorfolio); $counter++)
                            {
                              if($allDataAboutPorfolio[$counter]['info'] != NULL)
                              {
                                  echo '<img class="col-12 col-sm-6 col-md-4 img-fluid img-thumb" src="'.$allDataAboutPorfolio[$counter]['address'].'" alt="FILL" data-toggle="modal" data-target="#modalPortfolio'.$allDataAboutPorfolio[$counter]['id'].'">';
                              }
                            }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- модальные окна для "УСЛУГИ" находятся тут -->
    <?
      for($counter = 0; $counter < count($allDataAboutServices); $counter++)
      {
        if($allDataAboutServices[$counter]['link'] == 'NULL')
        {
          $link = '';
        }
        else
        {
          $link = $allDataAboutServices[$counter]['link'];
        }
        echo '<div class="modal fade" id="modalService_'.$allDataAboutServices[$counter]['id'].'" tabindex="-1" role="dialog" aria-labelledby="modalService_'.$allDataAboutServices[$counter]['id'].'Label" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST">
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="title" class="col-form-label">Редактирование</label>
                                <input name="title" type="text" class="form-control" id="title" value="'.$allDataAboutServices[$counter]['title'].'">
                              </div>
                              <div class="form-group">
                                <label for="discription" class="col-form-label">Заголовок услуги</label>
                                <textarea name="text" class="form-control" id="discription">'.$allDataAboutServices[$counter]['description'].'</textarea>
                              </div>
                              <div class="form-group">
                                <label for="typeMessage" class="col-form-label">Ссылка на пример услуги(необязательно)</label>
                                <input name="link" type="text" class="form-control" id="typeMessage" value="'.$link.'">
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                            <button name="editService'.$allDataAboutServices[$counter]['id'].'" type="submit" class="btn btn-purple-outline pointer">Применить изменения</button>
                          </div>
                      </form>
                    </div>
                </div>
            </div>';
      }
      for($counter = 0; $counter < count($allDataAboutServices); $counter++)
      {
        $allDataAboutPost = $_POST;
        if(isset($allDataAboutPost['editService'.$allDataAboutServices[$counter]['id']]))
        {
          $linkOfService;
          if($allDataAboutPost['link'] == '')
          {
            $linkOfService = NULL;
          }
          else
          {
            $linkOfService = $allDataAboutPost['link'];
          }
          $GLOBALS['mysqli']->query("UPDATE `services` SET `title` = '".$allDataAboutPost['title']."',
                                    `description` = '".$allDataAboutPost['text']."',
                                    `link` = '".$linkOfService."' WHERE `services`.`id` = ".$allDataAboutServices[$counter]['id'].";");
          echo '<script>document.location.href="adminstudio.php"</script>';
        }
        if(isset($allDataAboutPost['serviceDelete'.$allDataAboutServices[$counter]['id']]))
        {
          $GLOBALS['mysqli']->query("DELETE FROM `services` WHERE `services`.`id` = ".$allDataAboutServices[$counter]['id'].";");
          echo '<script>document.location.href="adminstudio.php"</script>';
        }
      }
    ?>

    <!--  Модальное окно для добавления новой услуги находится тут -->
    <div class="modal fade" id="modalService_add" tabindex="-1" role="dialog" aria-labelledby="modalService_addLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление услуги</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST">
                  <div class="modal-body">
                      <div class="form-group">
                        <label for="title" class="col-form-label">Заголовок услуги</label>
                        <input name="titleForNewService" type="text" class="form-control" id="title">
                      </div>
                      <div class="form-group">
                        <label for="discription" class="col-form-label">Описание услуги</label>
                        <textarea name="textForNewService" class="form-control" id="discription"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="typeMessage" class="col-form-label">Ссылка на пример услуги(необязательно)</label>
                        <input name="linkForNewService" type="text" class="form-control" id="typeMessage">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                    <button name="addNewService" type="submit" class="btn btn-purple-outline pointer">Добавить</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
    <?
      $allDataFromPostForNewService = $_POST;
      if(isset($allDataFromPostForNewService['addNewService']))
      {
        $GLOBALS['mysqli']->query("INSERT INTO `services`(`title`, `description`, `link`)
                                  VALUES ('".$allDataFromPostForNewService['titleForNewService']."',
                                          '".$allDataFromPostForNewService['textForNewService']."',
                                          '".$allDataFromPostForNewService['linkForNewService']."')");
        echo '<script>document.location.href="adminstudio.php"</script>';
      }
      ?>

      <?
        for($counter = 0; $counter < count($allDataAboutPorfolio); $counter++)
        {
          if($allDataAboutPorfolio[$counter]['info'] != NULL)
          {
            echo '<div class="modal fade" id="modalPortfolio'.$allDataAboutPorfolio[$counter]['id'].'" tabindex="-1" role="dialog" aria-labelledby="modalPortfolioLabel'.$allDataAboutPorfolio[$counter]['id'].'" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title align-items-center" id="exampleModalLabel"> Редактирование </h5>
                                <button type="button" class="close pointer" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label">Заголовок портфолио</label>
                                        <input type="text" class="form-control" id="title" value="'.$allDataAboutPorfolio[$counter]['title'].'">
                                    </div>
                                    <div class="form-group">
                                        <label for="discriptionPortfolio" class="col-form-label">Описание услуги</label>
                                        <textarea class="form-control" id="discriptionPortfolio">'.$allDataAboutPorfolio[$counter]['info'].'</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="imagesPorfolio f-flex justify-content-center text-center">';
            if($allDataAboutPorfolio[$counter]['video'] == '')
            {
              for($counterImages = 0; $counterImages < count($allDataAboutPorfolio); $counterImages++)
              {
                if($allDataAboutPorfolio[$counterImages]['type'] == $allDataAboutPorfolio[$counter]['type'] && $counter != $counterImages)
                { /* ГАЗИНУР, тут удаление блоков по крестику */
                  echo '
                          <div class="imgs d-flex justify-content-center">

                            <div id="picture'.$allDataAboutPorfolio[$counterImages]['id'].'" style="display: block;">
                              <img src="'.$allDataAboutPorfolio[$counterImages]['address'].'" alt="ALT" class="img-fluid pb-3 news-img-style">
                            </div>

                            <button type="button" style="display: block;" class="close d-flex flex-column justify-content-start pointer" onclick="closeImg(document.getElementById(\'picture'.$allDataAboutPorfolio[$counterImages]['id'].'\'), document.getElementById(\'button'.$allDataAboutPorfolio[$counterImages]['id'].'\'))" aria-label="Close">
                                <span id="button'.$allDataAboutPorfolio[$counterImages]['id'].'">&times;</span>
                            </button>

                          </div>';
                }
              }
            }
            $length = count($allDataAboutPorfolio);
            echo                    '</div></div>
                                        <div class="form-group d-flex flex-column">
                                          <input type="radio" id="video" name="r1" onclick="disp(document.getElementById(\'videoInput'.$allDataAboutPorfolio[$counter]['id'].'\'))"> Видео


                                          <form id="test">

                                          </form>

                                          <!-- Скрытая форма для добавления видео -->
                                          <form name="video" id="videoInput'.$allDataAboutPorfolio[$counter]['id'].'" style="display: none;">
                                              <input type="file">
                                          </form>

                                          <input type="radio" id="image" name="r1" onclick="disp(document.getElementById(\'imageInput'.$allDataAboutPorfolio[$counter]['id'].'\'))"> Изображение

                                          <!-- Скрытая форма для добавления видео -->
                                          <form name="image" id="imageInput'.$allDataAboutPorfolio[$counter]['id'].'" style="display: none;">
                                              <input type="text">
                                          </form>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-purple-outline pointer" data-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-purple-outline pointer">Применить изменения</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>';
          }
        }
    ?>

    <!-- ГАЗИНУР, модальное окно для добавления новой работы в "ПОРТФОЛИО" находится тут -->
    <div class="modal fade" id="modalPortfolio_add" tabindex="-1" role="dialog" aria-labelledby="modalPortfolio_addLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title align-items-center" id="exampleModalLabel"> Добавить работу </h5>
                    <button type="button" class="close pointer" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                    <div class="modal-body">

                        <!-- ГАЗИНУР, тут заголовок, который добавляется в бд -->
                        <div class="form-group">
                            <label for="title" class="col-form-label">Заголовок портфолио</label>
                            <input type="text" class="form-control" id="title">
                        </div>

                        <!-- ГАЗИНУР, тут описание добавляется в бд -->
                        <div class="form-group">
                            <label for="discriptionPortfolio" class="col-form-label">Описание услуги</label>
                            <textarea class="form-control" id="discriptionPortfolio"></textarea>
                        </div>

                        <!-- ГАЗИНУР, тут фотки или видосы добавляются в бд -->
                        <!-- ГАЗИНУР, выбор заливать видео или изображения -->
                        <div class="form-group d-flex flex-column">
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>Добавить</option>
                                <option value="1">Видео</option>
                                <option value="2">Изображение</option>
                            </select>
                            <input hidden class="my-3" type="text">
                            <input hidden type="file">
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

    <script src="res/js/showInputs.js"></script>
    <script src="res/js/deleteImages.js"></script>

    <!-- Bootstrap js -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
