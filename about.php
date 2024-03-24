<?php include("path.php"); ?>

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

<?php include("app/inc/header.php"); ?> 

<!--Блок main Начало-->
    <div class="container">
        <div class="content row">
        <!--main content-->
        <div class="main-content col-md-8 col-12">
            <h2>О компании</h2>
            <div class="about_us row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/logo.png" alt="" class="img-thumbnail">
                </div>
                    <div class="text_about col-md-8 col-12 ">
                        <p> Компания «Складman» была основана в 1995 г. и на сегодняшний день является одним из лидеров российского рынка автомобильных товаров. Сеть филиалов компании обеспечивает поставки качественной продукции и удобные сервисы клиентам по всей территории Российской Федерации. Продуктовый портфель компании постоянно развивается в следующих основных направлениях: автозапчасти, автохимия, автокосметика и автопринадлежности. Работа компании построена на прямом сотрудничестве с крупными зарубежными производителями, завоевавшими международное признание.
                        Эксклюзивные бренды являются визитной карточкой компании, многие производители полностью доверили нам продвижение и дистрибуцию своих брендов на территории РФ и стран СНГ. В результате многолетнего сотрудничества эта продукция заняла лидирующие позиции на рынке России, а для большинства производителей эксклюзивных брендов «Складman» теперь является крупнейшим зарубежным клиентом-дистрибьютором.</p>
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

<?php include("app/inc/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
  </body>
</html>