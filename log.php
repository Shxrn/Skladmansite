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
    <!--END HEADER-->
    <!--Форма-->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="log.html">
            <h2>Авторизация</h2>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="md-3 col-12 col-md-4">
                <button type="button" class="btn btn-light">Войти</button>
                <a href="reg.html">Зарегистрироваться</a>
            </div>
        </form>
    </div>
    <!--Конец формы-->
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