<?
  require_once 'functions/functions.php';
  $exampleDB = $GLOBALS['mysqli']->query("SELECT * FROM `portfolio`, `img` WHERE `portfolio`.`id` = `img`.`idPort` and `type` = 'logo'");
  $allDataAboutPortfolio;
  while(($row = $exampleDB->fetch_assoc()) != false)
  {
    $allDataAboutPortfolio[] = $row;
  }
?>

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
    <link rel="stylesheet" href="res/styles.css">
  </head>
  <body>

    <section class="container-fluid py-1" id="portfolio">

      <h1 class="text-center text-purple">Наше портфолио</h1>

      <!-- Portfolio row -->
      <div class="container mt-5">
        <div class="row mx-auto">

          <!-- Portfolio slider -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
          <?
            for($counter = 0; $counter < count($allDataAboutPortfolio); $counter++)
            {
                if($counter == 0)
                {
                  echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$counter.'" class="active"></li>';
                }
                else
                {
                  echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$counter.'"></li>';
                }
                if($counter == 5)
                {
                  break;
                }
            }
          ?>
            </ol>

            <div class="carousel-inner">

              <!-- Slider`s elements -->
              <?
                // Цикл выводит все изображения портфолио
                for($counter = 0; $counter < count($allDataAboutPortfolio); $counter++)
                {
                  if($counter == 0)
                  {
                    echo '<div class="carousel-item active">';
                  }
                  else
                  {
                    echo '<div class="carousel-item">';
                  }
                    echo '
                        <h2>'.$allDataAboutPortfolio[$counter]['title'].'</h2>
                        <img class="img-fluid img-thumb" src="'.$allDataAboutPortfolio[$counter]['img'].'" data-toggle="modal" data-target="#'.$allDataAboutPortfolio[$counter]['id'].'" alt="Card image cap">
                             <br>
                            </div>';
                  if($counter == 5)
                  {
                    break;
                  }
                }
              ?>
            </div>
            <!-- Arrows Next and Prev of Slider -->
            <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" style="width: 50px; height: 50px;" aria-hidden="true"></span>
            </a>
            <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
              <span class="carousel-control-next-icon" style="width: 50px; height: 50px;" aria-hidden="true"></span>
            </a>

          </div>
        </div>
      </div><!-- Portfolio Row -->

    </section><!-- Portfolio Section -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
      <script src="res/bootstrap/js/bootstrap.js"></script>
    <script src="res/bootstrap/js/bootstrap.min.js"></script>

    <!-- YandexMap js -->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="res/js/map.js"></script>

    <!-- Form validation js -->
    <script src="res/js/validate.js"></script>

    <!-- Menu reaction to scrolling js -->
    <script src="res/js/scroll.js"></script>

    <!-- Form scrolling js -->
    <script src="res/js/order.js"></script>

    <!-- Custrom js for form -->
    <script type="text/javascript">
      $('input[name="file"]').change(function(){
        var fileName = $(this).val().replace(/^.*\\/, "");
        var pathElement = document.getElementById("upload-path");
        pathElement.innerHTML = fileName;
      });
    </script>

  </body>
</html>
