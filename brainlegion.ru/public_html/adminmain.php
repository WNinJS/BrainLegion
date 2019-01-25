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
<body>
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
                        <a href="admininfo.php" class="nav-link text-purple"><span>Информация</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="adminmain.php" class="nav-link desible"><span>Главная</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="adminstudio.php" class="nav-link text-purple"><span>Studio</span></a>
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
    <p class="dropChanges">
        <a class="btn btnSize btn-purple-outline" data-toggle="collapse" href="#areaOfWork" aria-expanded="false" aria-controls="collapseExample">
            Направления работы
        </a>
    </p>
    <div class="collapse" id="areaOfWork">
        <div class="card card-block dropChangesInfoField fieldChanges">
            <!-- Studio -->
            <div class="card-container col-sm-12 col-md-12 col-lg-4 p-2">
                <div class="card card-half-transparent h-100 d-flex flex-column align-items-center">
                    <a href="studio.php" class="card-img-logo "><img src="res/img/logos/brainlegion_studio.svg" class="img-fluid card-logo-style"  alt=""></a>
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="card-title text-center"><b>BL Studio</b></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur culpa officia, eos commodi illo numquam! Tenetur facere itaque et, veniam reprehenderit rerum consequuntur cumque ut maiores quos mollitia, excepturi suscipit atque, sapiente ipsa explicabo sint dolore earum, repudiandae fugiat minus officia ipsam odit. Iure corporis, ea officiis est eaque temporibus, quibusdam similique consequatur id distinctio quas rem possimus vel, reiciendis quasi molestias. Fuga, ad tempore corrupti suscipit libero natus? Ipsam!</p>
<!--ГАЗИНУР, Кнопка удалить и вывод из БД-->                            
                            <button type="button" class="btn btn-purple-outline" data-toggle="modal" data-target="#myModal">
                            Редактировать
                            </button>
                            <button class="btn btn-purple-outline">Удалить</button>
                    </div>
                </div>
            </div>
            <!-- Factory -->
            <div class="card-container col-sm-12 col-md-12 col-lg-4 p-2">
                <div class="card card-half-transparent h-100 d-flex flex-column align-items-center">
                    <a href="factory.php" class="card-img-logo "><img src="res/img/logos/brainlegion_factory.svg" class="img-fluid card-logo-style"  alt=""></a>
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="card-title text-center"><b>BL Factory</b></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur culpa officia, eos commodi illo numquam! Tenetur facere itaque et, veniam reprehenderit rerum consequuntur cumque ut maiores quos mollitia, excepturi suscipit atque, sapiente ipsa explicabo sint dolore earum, repudiandae fugiat minus officia ipsam odit. Iure corporis, ea officiis est eaque temporibus, quibusdam similique consequatur id distinctio quas rem possimus vel, reiciendis quasi molestias. Fuga, ad tempore corrupti suscipit libero natus? Ipsam!</p>
<!--ГАЗИНУР, Кнопка удалить и вывод из БД-->                            
                            <button class="btn btn-purple-outline">Редактировать</button>
                            <button class="btn btn-purple-outline">Удалить</button>
                    </div>
                </div>
            </div>
            <!-- Scholae -->
            <div class="card-container col-sm-12 col-md-12 col-lg-4 p-2">
                <div class="card card-half-transparent h-100 d-flex flex-column align-items-center">
                    <a href="scholae.php" class="card-img-logo "><img src="res/img/logos/brainlegion_scholae.svg" class="img-fluid card-logo-style"  alt=""></a>
                    <div class="card-body d-flex flex-column text-center">
                        <h4 class="card-title text-center"><b>BL Scholae</b></h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur culpa officia, eos commodi illo numquam! Tenetur facere itaque et, veniam reprehenderit rerum consequuntur cumque ut maiores quos mollitia, excepturi suscipit atque, sapiente ipsa explicabo sint dolore earum, repudiandae fugiat minus officia ipsam odit. Iure corporis, ea officiis est eaque temporibus, quibusdam similique consequatur id distinctio quas rem possimus vel, reiciendis quasi molestias. Fuga, ad tempore corrupti suscipit libero natus? Ipsam!</p>
<!--ГАЗИНУР, Кнопка удалить и вывод из БД-->                            
                            <button class="btn btn-purple-outline">Редактировать</button>
                            <button class="btn btn-purple-outline">Удалить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="dropChanges">
        <a class="btn btn-primary btnSize btn-purple-outline btn-purple-outline:hover" data-toggle="collapse" href="#news" aria-expanded="false" aria-controls="collapseExample">
            Новости
        </a>
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
                        <div class="text-center mt-auto">
                            <p class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#newsModal1">Читать полностью</p>
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
                        <div class="text-center mt-auto">
                            <p class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#newsModal2">Читать полностью</p>
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
                        <div class="text-center mt-auto">
                            <p class="btn btn-purple-outline pointer" data-toggle="modal" data-target="#newsModal3">Читать полностью</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Navigation
    <script src="res/js/dropMenu.js"></script>
    -->
    <!-- Модальное окно -->  
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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