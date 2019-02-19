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
	    <link rel="stylesheet" href="cssadmin/adminpanel.css">
	</head>
<body>
    <!-- Top Navigation -->
    <div class="container-fluid px-0 id="top-menu">
        <nav class="navbar fixed-top-desktop navbar-expand-lg navbar-light" id="top-menu">
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
    <!-- Top Navigation
    <script src="res/js/dropMenu.js"></script>
    -->



    <!-- Bootstrap js -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
