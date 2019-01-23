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
    <link rel="stylesheet" href="res/styles.css">
  </head>
  <body>

    <!-- Top Menu Section -->
    <section class="container-fluid sticky-top-desktop px-0" id="top-menu">

      <!-- Top Navigation -->
      <div class="container-fluid px-0">
        <nav class="navbar px-md-5 navbar-expand-lg navbar-light">

          <!-- Logo -->
          <a href="index.html" class="navbar-brand ">
            <img src="res/img/logos/brainlegion_studio.svg" alt="FILL" class="img-fluid img-logo">
          </a>

          <!-- Menu Button for Mobile -->
          <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>

          <!-- Menu Itself -->
          <div class="collapse navbar-collapse text-right" id="navbar-toggler">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link text-purple" href="index.html"><span>На главную</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-purple" href="#competences"><span>Услуги</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-purple" href="#portfolio"><span>Портфолио</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-purple" href="#contact"><span>Связаться</span></a>
              </li>
            </ul>
          </div>

        </nav>
      </div><!-- Top Navigation -->

    </section><!-- Top Menu Section -->


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid jumbotron-light m-0 p-5 text-light" id="jumbotron-about">
      <div class="container">
        <h1 class="text-purple">BrainLegion Studio</h1>
        <p class="lead">Анализируем задачу, находим нестандартный подход, оживляем идеи, реализуем ваши самые смелые замыслы! </p>
      </div>
    </div>


    <!-- About Section -->
    <section class="container-fluid py-3" id="about">

      <!-- Snippet -->
      <div class="container py-2">

        <p class="mt-4 text-center">
          При выборе специализации своей компании, мы решили особое внимание уделить такой услуге, как создание 3D моделей. Эта услуга в последнее время очень востребована. С заказчика мы берем только чертежи и эскизы или придумываем все с «нуля», уточняем его пожелания и начинаем производство 3D модели. Наши специалисты готовы в короткие сроки создать для вас любую 3D модель — от отдельных машиностроительных деталей до целых машин, агрегатов, квартир и ландшафтов.
        </p>
      </div>

    </section>


    <!-- Competences Section -->
    <section class="container-fluid py-3" id="competences">
      <h1 class="text-center text-purple">Услуги</h1>

      <!-- Competency -->
      <div class="container mt-4 py-2">
        <!-- <h2 class="text-center">Мероприятия под ключ</h2> -->

        <!-- Competency Row -->
        <?
          $allDataAboutServices = getFromOneTable('services'); // Этот массив содержит все данные об услугах
          for($counter = 0; $counter < count($allDataAboutServices); $counter++)
          {
            // Если блок по счету является первым из трех, то заводим его в горизонтальный контейнер
            if($counter % 3 == 0)
            {
              echo '<div class="row mx-auto mt-4 py-2 justify-content-center">';
            }

            // Выводится в блок название и информация о б услуге
            echo '<div class="card-container col-sm-12 col-md-6 col-lg-4 p-2">
                    <div class="card card-half-transparent h-100">
                      <div class="text-center card-body d-flex flex-column">
                        <h4 class="card-title text-center"><b>'.$allDataAboutServices[$counter]['title'].'</b></h4>
                        <p class="card-text">'.$allDataAboutServices[$counter]['description'].'</p>';

            // Если есть ссылка на дизайн, то добавляется еще одна кнопка
            if($allDataAboutServices[$counter]['link'] == NULL)
            {
              echo '<a href="#takeTheOrder" class="mt-auto text-center"><p class="btn btn-purple-outline btn-purple" data-ordertype="3d">Заказать</p></a>';
            }
            else
            {
              echo '<div class="mt-auto d-flex justify-content-around">
                      <a href="'.$allDataAboutServices[$counter]['link'].'" class="link"><p class="btn btn-purple-outline btn-purple">Пример дизайна</p></a>
                      <a href="#" class="mt-auto text-center"><p class="btn btn-purple-outline" data-ordertype="3d">Заказать</p></a>
                    </div>';
            }

            // Закрывающие теги
            echo '</div>
                </div>
              </div>';

            // Если конттейнер последний по счету или явно последний блок, то закрывается последний тег
            if($counter % 3 == 2 || $counter + 1 == count($allDataAboutServices))
            {
              echo '</div>';
            }
          }
        ?>

      </div><!-- Competency -->

    </section><!-- Competences Section -->


    <!-- Portfolio Section -->
    <section class="container-fluid py-1" id="portfolio">

      <h1 class="text-center text-purple">Наше портфолио</h1>

      <!-- Portfolio row -->
      <div class="container mt-5">
        <div class="row mx-auto">

          <!-- Portfolio slider -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <!-- Slider`s elements -->
              <!-- ГАЗИНУР, тут нужно сделать, чтобы эти изображения брались с базы данных, они нажатием открывают подробную инфу в модалке -->
              <div class="carousel-item active">
                <img class="img-fluid img-thumb" src="res/img/portfolio/hotel/1.jpg" data-toggle="modal" data-target="#hotel" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/interior/1.jpg" data-toggle="modal" data-target="#interior" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/furniture/1.jpg" data-toggle="modal" data-target="#furniture" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/buildings/1.jpg" data-toggle="modal" data-target="#buildings" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/devices/1.jpg" data-toggle="modal" data-target="#devices" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/oil-tank/1.jpg" data-toggle="modal" data-target="#oil-tank" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/explosion/1.jpg" data-toggle="modal" data-target="#explosion" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/factory/1.jpg" data-toggle="modal" data-target="#factory" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/bricks/1.jpg" data-toggle="modal" data-target="#bricks" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/conference-room/1.jpg" data-toggle="modal" data-target="#conference-room" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/oil/1.jpg" data-toggle="modal" data-target="#oil" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/plane/1.jpg" data-toggle="modal" data-target="#plane" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/mixing/1.jpg" data-toggle="modal" data-target="#mixing" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/machine/1.jpg" data-toggle="modal" data-target="#machine" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/chairs/1.jpg" data-toggle="modal" data-target="#chairs" alt="Card image cap">
              </div>
              <div class="carousel-item">
                <img class="img-fluid img-thumb" src="res/img/portfolio/army/1.jpg" data-toggle="modal" data-target="#army" alt="Card image cap">
              </div>
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


    <!-- ОТЗЫВЫ ТУТ -->


    <!-- Contact Section -->
    <section class="container-fluid py-5" id="contact">

      <h1 id="takeTheOrder" class="text-center text-purple">Сделать заказ</h1>

      <!-- Contact Form -->
      <form method="post" enctype="multipart/form-data" class="d-flex flex-column container pt-4 justify-center align-items-center" id="contact-form">

        <!-- Name & Subject -->
        <div class="row mx-auto text-center d-flex flex-column align-items-center">
          <div class="form-group col-md-6">
            <label for="name">Ваше имя:</label>
            <input class="form-control form-purple" id="name" type="text" placeholder="Иван Иванов" name="name">
            <p id="name-error" class="hidden invalid-feedback small">Напишите своё имя</p>
        	</div>

          <div class="form-group col-md-6">
            <label for="subject">Тема обращения:</label>
      			<select class="form-control form-purple" id="subjectSelect">
      				<option value="3d">3D визуализация</option>
      			 	<option value="virt-tour">Виртуальные туры</option>
              <option value="mockups">Макетирование</option>
              <option value="vr">VR/AR</option>
              <option value="events">Мероприятия</option>
              <option value="projecting">Стретегическое проектирование</option>
              <option value="other">Другое</option>
      			</select>
        	</div>
        </div>

        <!-- Phone & Email -->
        <!-- ГАЗИНУР, тут нужно сделать, чтобы эти данные добавлялись в базу -->
        <div class="row mx-auto text-center d-flex flex-column align-items-center">
          <div class="form-group col-md-6">
            <label for="phone">Телефон:</label>
            <input class="form-control form-purple" id="phone" type="text" placeholder="8 123 1231212" name="phone" onclick="addPhone(this)" oninput="validatePhone(this)" onchange="checkPhone(this)">
            <p id="phone-error" class="hidden invalid-feedback small">Введите корректный номер телефона</p>
          </div>


          <div class="form-group col-md-6">
            <label for="email">Email:</label>
            <input class="form-control form-purple" type="text" id="email" placeholder="ivanivanov@domain.com" name="email" onchange="checkMail(this)">
            <p id="email-error" class="hidden invalid-feedback small">Введите корректный email</p>
          </div>
        </div>

        <!-- Message -->
        <div class="row mx-auto text-center d-flex flex-column align-items-center">
          <div class="form-group col-sm-6">
            <label for="text">Сообщение:</label>
    				<textarea class="form-control form-purple" id="text" name="text" rows="5"></textarea>
    				<p id="textarea-error" class="hidden invalid-feedback small">Сообщение не может быть пустым</p>
    			</div>
        </div>

        <!-- File -->
        <div class="row mx-auto text-center d-flex flex-column align-items-center">
          <div class="form-group col-sm-6">
            <label for="file">Прикрепите файл при необходимости:</label>
            <label class="custom-file w-100">
              <input type="file" name="file" id="file" class="form-control form-purple custom-file-input">
              <span class="form-control form-purple custom-file-control" id="upload-path">Выберите файл...</span>
            </label>
          </div>
        </div>

        <div class="text-center mt-3">
          <input type="submit" id="submit" class="btn pointer btn btn-purple-outline" value="Отправить сообщение">
          <p id="contact-form-status" class="hidden mt-2">Статус сообщения</p>
        </div>

      </form>

    </section><!-- Contact Section -->


    <!-- Footer -->
    <section class="container-fluid" id="footer">
      <div class="container">

        <div class="row justify-content-center text-light py-5">

          <!-- Left Side -->
          <div class="col-sm-12 col-md-6 col-lg-6" id="footer-contacts">

            <!-- Footer Menu -->
            <ul class="nav mb-4" id="footer-menu">
              <li class="nav-item pr-3">
                <a class="nav-link p-0" href="index.html">Главная</a>
              </li>
              <li class="nav-item pr-3">
                <a class="nav-link p-0" href="studio.html">Studio</a>
              </li>
              <li class="nav-item pr-3">
                <a class="nav-link p-0" href="scholae.html">Scholae</a>
              </li>
              <li class="nav-item pr-3">
                <a class="nav-link p-0" href="factory.html">Factory</a>
              </li>
            </ul>

            <!-- Title & Snippet -->
            <div id="snippet" class="mb-4">
              <h5>BrainLegion</h5>
              <p class="text-muted">Оживляем идеи для решения Ваших задач</p>
            </div>

            <!-- Contacts (phone, email, address, etc) -->
            <div id="contacts" class="mb-4">
              <ul class="list-unstyled">
                <li>+7 (937) 326-11-85</li>
                <li>+7 (961) 364-08-86</li>
                <li><a href="mailto:brainlegionufa@gmail.com">brainlegionufa@gmail.com</a></li>
                <li>Адрес: г. Уфа, Проспект Октября, 2</li>
              </ul>
            </div>

            <!-- Social Links -->
            <!--
            <div id="socials" class="mb-4">
              <a href="#"><i class="icon icon-purple icon-vkontakte icon-standart"></i></a>
              <a href="#"><i class="icon icon-purple icon-instagram icon-standart"></i></a>
              <a href="#"><i class="icon icon-purple icon-facebook-squared icon-standart"></i></a>
            </div>
            -->

            <!-- Copyrights -->
            <div id="copyrights">
              <p>Все права защищены </p>
              <p>© <a class="link-footer" href="index.html">Brainlegion.ru</a>, 2018</p>
            </div>

          </div><!-- Left Side -->

          <!-- Right Side -->
          <div class="col-sm-12 col-md-6 col-lg-6 px-5 pt-sm-2 px-sm-0 d-none d-md-block" id="footer-map">
            <div id="map" class="w-100 h-100"></div>
          </div>

        </div>

      </div>
    </section><!-- Footer Section -->


    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D моделирование и фотореалистичная визуализация гостиницы</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Представлены 3D визуализации экстерьера гостиницы в нескольких ракурсах. Высокая детализация визуализации позволила показать потенциальному заказчику будущую атмосферу строящейся гостиницы.</p>
            <img src="res/img/portfolio/hotel/1.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/2.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/3.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/4.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/5.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/6.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/hotel/7.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="interior" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D визуализация интерьера квартиры в многоквартирном  доме</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Дизайн выполнен в классическом стиле. Цель визуализации — продемонстрировать интерьер квартиры для потенциальных покупателей.</p>
            <img src="res/img/portfolio/interior/1.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/interior/2.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/interior/3.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/interior/4.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="furniture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D моделирование и визуализации мебели</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Создание коллекции 3D моделей мебели в различных форматах для последующего использования дизайнерами в своих проектах. 3D моделей мебели выполнена с максимально возможной прорисовкой деталей с последующей фото реалистичной визуализацией.</p>
            <img src="res/img/portfolio/furniture/1.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/furniture/2.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/furniture/3.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/furniture/4.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/furniture/5.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/furniture/6.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="buildings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D визуализация общественного здания</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Архитектура экстерьера магазина выделяется тщательной проработкой лепных элементов</p>
            <img src="res/img/portfolio/buildings/1.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/2.png" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/3.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/4.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/5.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/6.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/buildings/7.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="devices" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D модели технологического оборудования</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>В коллекции представлено различное оборудование: тепловое, холодильное, нейтральное, морозильное, для линии раздачи и т. д. Все модели выполнены в высоком разрешении для демонстрации преимуществ оборудования.</p>
            <img src="res/img/portfolio/devices/1.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/devices/2.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/devices/3.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
            <img src="res/img/portfolio/devices/4.jpg" alt="ALT" class="img-fluid"> <p class="mt-4"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="oil-tank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик обслуживания нефтяного материала</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D визуализацию обслуживание нефтяного резервуара .Фото реалистичная визуализация и созданный на основе нее 3D видеоролик помогает реализовать и понять ее построение и работу.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/upNyoCemoao" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="explosion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title align-items-center" id="exampleModalLabel">3D анимация разрушаемого объекта</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D анимацию разрушение кирпичной стены.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/okTB_vynf9s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="mixing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации процесса смешивания </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D визуализацию смешивания двух различных жидкостей.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/-bskhME4Lts" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="factory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации нефтеперерабатывающего завода</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>3D визуализация нефтеперерабатывающего завода. Детальная проработка резервуаров, зданий и прилегающей территории позволила продемонстрировать преимущества спонсирования и постройке данного завода.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/9wZeR_GkzSE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="conference-room" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации конференц-зала</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>3D визуализация комфортабельного конференц-зала для офиса крупной российской компании. Строгий, но уютный интерьер дает возможность провести деловую встречу в максимально комфортной обстановке.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/JHWz5IIbF_k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="oil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации различных видов жидкостей</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>3D визуализация экстерьера различных видов масел. Визуализация выполнена для демонстрации вида различных жидкостей в данном ландшафте.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/h6b2FR6ZR58" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="plane" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик презентации реактивного самолета</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/6fY_XkAh0NI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-4">3D презентация реактивного самолета. 3D модель самолета выполнена с нуля, детально смоделирован фюзеляж , крылья, двигатель и все другие детали самолета.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="machine" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации технологического оборудования</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D визуализацию комплекса селективного нанесения влагозащитного покрытия на печатные узлы. Фото реалистичная визуализация и созданный на основе нее 3D видеоролик помогает решить многие вопросы в создании и понимании работы комплекса.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/8ecbyKR9WMo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="army" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик визуализации военной техники</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D визуализацию различных видов военной техники. 3D модели выполнены с нуля и детально смоделированы.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/4kYdfxu9EwI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="chairs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик физического взаимодействия двух материалов</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D анимацию взаимодействия двух различных материалов.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/ur_sR49zC3g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modals -->
    <!-- ГАЗИНУР, это модалки от слайдеров, здесь содержится подробная инфа, также нужно чтобы выводилась из БД -->
    <div class="modal fade" id="bricks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title align-items-center" id="exampleModalLabel">3D видеоролик физического взаимодействия двух материалов</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Видеоролик демонстрирует 3D анимацию взаимодействия двух объектов.</p>
            <div class="video-portfolio-youtube">
              <iframe src="https://www.youtube.com/embed/RLODDUOl5B0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary pointer" data-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap js -->
    <script src="res/jquery/jquery-3.2.1.min.js"></script>
    <script src="res/popper/popper.js"></script>
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
