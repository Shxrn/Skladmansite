<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Складman</title>
  </head>
  <body>
    <header class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h1>
              <a href="/">Складman</a></h1>
          </div> 
        <nav class="col-8">
          <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Товары</a></li>
            <li>
              <a href="#"><i class="fa-solid fa-user"></i> Кабинет</a>
              <ul>
                <li><a href="#">Заказы</a></li>
                <li><a href="#">Выход</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        </div>
      </div>
    </header>
<!--блок карусели Начало-->
  <div class = "container">
    <div class="row">
      <h2 class="slider-title">Топ продуктов</h2>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="">Kyb items</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="">Масла TCL</a></h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption-hack carousel-caption d-none d-md-block">
            <h5><a href="">LIQUI MOLY OIL</a></h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
<!--блок карусели END-->

<!--Блок main Начало-->
  <div class="container">
    <div class="content row">
      <!--main content-->
      <div class="main-content col-md-8 col-12">
        <h2>Последние товары</h2>
        <div class="product row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/LIQUI MOLY.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="product_text col-12 col-md-8">
            <h3>
              <a href="#">Моторное масло LIQUI MOLY</a>
            </h3>
            <i class="far fa-user">LIQUI MOLY Russia</i>
            <p class="preview-text">
              Моторное масло LIQUI MOLY Special Tec AA 5W30 4л
            </p>

          </div>
        </div>
        <div class="product row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/TCL.png" alt="" class="img-thumbnail">
          </div>
          <div class="product_text col-12 col-md-8">
            <h3>
              <a href="#">Моторное масло TCL 4л</a>
            </h3>
            <i class="far fa-user">OilMan</i>
            <p class="preview-text">
              Моторное масло TCL синтетическое Zero Line Fuel Economy Sp Gf-6 0W20 4л
            </p>

          </div>
        </div>
        <div class="product row">
          <div class="img col-12 col-md-4">
            <img src="assets/images/KYB.png" alt="" class="img-thumbnail">
          </div>
          <div class="product_text col-12 col-md-8">
            <h3>
              <a href="#">KYB Амортизаторы</a>
            </h3>
            <i class="far fa-user">Japan cars</i>
            <p class="preview-text">
              Качественные амортизаторы KYB прямиком из Японии
            </p>

          </div>
        </div>

      </div>
    
      <!--sidebar Content-->
      <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Поиск</h3>
            <form action="/" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
            </form>
          </div>
          <div class="section products">
            <h3>Категории товаров</h3>
            <ul>
              <li><a href="#">Масла</a></li>
              <li><a href="#">Амортизаторы</a></li>
              <li><a href="#">Аккумуляторы</a></li>
            </ul>
          </div>

      </div>
    </div>
  </div>
<!--Блок main Конец-->     
<!--footer-->
<div class="footer container-fluid">
  <div class="footer-content container">
    <div class="row">
      <div class="footer-section about col-md-6 col-12">
        <h3 class="logo-text">Складman</h3>
        <p>
          Складman - это интернет-магазин автозапчастей, автохимии и аксессуаров от более чем 80 производителей разных стран.
        </p>
        <div class="contact">
          <span><i class="fas fa-phone"></i>&nbsp; +7(914)-976-16-97</span>
          <span><i class="fas fa-envelope"></i>&nbsp; slad@man.com</span>
        </div>
        <div class="socials">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-vk"></i></a>
          <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
        </div>
      </div>

      <div class="footer-section links col-md-6 col-12">
        <h3>Ссылки</h3>
        <br>
        <ul>
          <a href="#">
            <li>Команда</li>
          </a>
          <a href="#">
            <li>Галлерея</li>
          </a>
          <a href="#">
            <li>Дальнейшее развитие</li>
          </a>
        </ul>
      </div>

      
    </div>
    <div class="footer-bottom">
      &copy; skladman.com
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>