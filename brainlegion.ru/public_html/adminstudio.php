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
                            <a href="admininfo.php" class="nav-link text-purple"><span>Информация</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="adminmain.php" class="nav-link text-purple"><span>Главная</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="adminstudio.php" class="nav-link disabled"><span>Studio</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="adminfactory.php" class="nav-link text-purple"><span>Factory</span></a>
                        </li>

                        <!-- ГАЗИНУР, Логаут и завершение сессии -->
                        <li class="nav-item">
                            <a href="adminlogin.php" class="nav-link text-purple"><span>Logout</span></a>
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
                <button class="my-2 btn btn-purple-outline pointer btnsize" data-toggle="collapse" data-target="#collapseServices" aria-expanded="false" aria-controls="collapseServices"> Услуги </button>

                <!-- Collapse Services -->
                <div class="collapse" id="collapseServices">
                    <div class="card-container">
                        <div class="card card-half-transparent h-100 d-flex flex-wrap flex-row align-items-center">
                            
                            <!-- ГАЗИНУР, тут добавляются, изменяются услуги, которые выводятся на страничке Studio.php -->
                            <div class="card-body col-12 col-sm-6 col-md-4 d-flex flex-column text-center">
                                <!-- ГАЗИНУР, Заголовок из бд -->
                                <h4><b> 3D визуализация модели </b></h4>
                                <!-- ГАЗИНУР, Текст из бд -->
                                <p class="card-text">Визуализация 3D моделей стала широко распространена в любой отрасли. 3D модели зданий, мебели, машин, персонажей и многих других объектов используются в рекламе, при разработке моделей для 3D принтеров, в автомобильной промышленности, в компьютерных играx. Во всех этих областях очень важно иметь высококачественные детализированные точные модели, что может предоставить наша студия.</p>
    
                                <div class="buttonServices d-flex flex-row justify-content-around">
                                    <!-- Кнопка, вызывающая модальное окно (будет ниже) -->                            
                                    <button type="button" class="btn btn-purple-outline btnsize" data-toggle="modal" data-target="#modalService_1">Редактировать</button>
                                    <!-- ГАЗИНУР, кнопка, удаляющая данные из БД -->
                                    <button class="btn btn-purple-outline btnsize">Удалить</button>
                                </div>
                            </div>

                            <!-- ГАЗИНУР, тут добавляются, изменяются услуги, которые выводятся на страничке Studio.php -->
                            <div class="card-body col-12 col-sm-6 col-md-4 d-flex flex-column text-center">
                                <!-- ГАЗИНУР, Заголовок из бд -->
                                <h4><b> 3D визуализация модели </b></h4>
                                <!-- ГАЗИНУР, Текст из бд -->
                                <p class="card-text">Визуализация 3D моделей стала широко распространена в любой отрасли. 3D модели зданий, мебели, машин, персонажей и многих других объектов используются в рекламе, при разработке моделей для 3D принтеров, в автомобильной промышленности, в компьютерных играx. Во всех этих областях очень важно иметь высококачественные детализированные точные модели, что может предоставить наша студия.</p>
                        
                                <div class="buttonServices d-flex flex-row justify-content-around text-center">
                                    <!-- Кнопка, вызывающая модальное окно (будет ниже) -->                            
                                    <button type="button" class="btn btn-purple-outline btnsize" data-toggle="modal" data-target="#myModal">Редактировать</button>
                                    <!-- ГАЗИНУР, кнопка, удаляющая данные из БД -->
                                    <button class="btn btn-purple-outline btnsize">Удалить</button>
                                </div>
                            </div>

                            <!-- ГАЗИНУР, тут добавляются, изменяются услуги, которые выводятся на страничке Studio.php -->
                            <div class="card-body col-12 col-sm-6 col-md-4 d-flex flex-column text-center">
                                <!-- ГАЗИНУР, Заголовок из бд -->
                                <h4><b> 3D визуализация модели </b></h4>
                                <!-- ГАЗИНУР, Текст из бд -->
                                <p class="card-text">Визуализация 3D моделей стала широко распространена в любой отрасли. 3D модели зданий, мебели, машин, персонажей и многих других объектов используются в рекламе, при разработке моделей для 3D принтеров, в автомобильной промышленности, в компьютерных играx. Во всех этих областях очень важно иметь высококачественные детализированные точные модели, что может предоставить наша студия.</p>
                                
                                <div class="buttonServices d-flex flex-row justify-content-around text-center">
                                    <!-- Кнопка, вызывающая модальное окно (будет ниже) -->                            
                                    <button type="button" class="btn btn-purple-outline btnsize" data-toggle="modal" data-target="#myModal">Редактировать</button>
                                    <!-- ГАЗИНУР, кнопка, удаляющая данные из БД -->
                                    <button class="btn btn-purple-outline btnsize">Удалить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button collapsePortfolio -->
                <button class="my-2 btn btn-purple-outline pointer btnsize" data-toggle="collapse" data-target="#collapsePortfolio" aria-expanded="false" aria-controls="collapsePortfolio">Портфолио </button>

                <div class="collapse" id="collapsePortfolio">
                    <div class="card-container">
                        <div class="card card-half-transparent h-100 d-flex flex-wrap flex-row align-items-center">
                            <img class="col-12 col-sm-6 col-md-4 img-fluid img-thumb" src="res/img/portfolio/devices/1.jpg" alt="FILL">
                            <img class="col-12 col-sm-6 col-md-4 img-fluid img-thumb" src="res/img/portfolio/bricks/1.jpg" alt="FILL">
                            <img class="col-12 col-sm-6 col-md-4 img-fluid img-thumb" src="res/img/portfolio/buildings/1.jpg" alt="FILL">
                            <img class="col-12 col-sm-6 col-md-4 img-fluid img-thumb" src="res/img/portfolio/chairs/1.jpg" alt="FILL">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ГАЗИНУР, модальные окна для "УСЛУГИ" находятся тут -->
    <div class="modal fade" id="modalService_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактирование</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок услуги</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="discription" class="col-form-label">Описание услуги</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="typeMessage" class="col-form-label">Тип услуги</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-purple-outline" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-purple-outline">Применить изменения</button>
              </div>
            </div>
        </div>
</div>

    <!-- Bootstrap js -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>