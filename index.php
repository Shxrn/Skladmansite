<?php include("path.php"); 
      include("app/controllers/categories.php");
      $products = selectAllFromPostsWithCategoriesOnIndex('products', 'categories');
?>
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
        <?php foreach ($products as $product): ?>
          <div class="product row">
            <div class="img col-12 col-md-4">
              <img src="<?=BASE_URL .  'assets/images/product/' . $product['img']?>" alt="<?=$product['title']?>" class="img-thumbnail">
            </div>
            <div class="product_text col-12 col-md-8">
              <h3>
                <a href="<?=BASE_URL . 'single_product.php?product=' . $product['id'];?>"><?=substr($product['title'], 0, 120)?></a>
              </h3>
              <i class="fa-solid fa-layer-group">Категория: <?=$product['name']?></i>
              <p class="preview-text">
                <?=$product['content']?>
              </p>

            </div>
          </div>
        <?php endforeach; ?>
      </div>
    
      <!--sidebar Content-->
      <div class="sidebar col-md-3 col-12">
          <div class="section search">
            <h3>Поиск</h3>
            <form action="search.php" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
            </form>
          </div>
          <div class="section categories">
            <h3>Категории товаров</h3>
            <ul>
              <?php foreach ($categories as $key => $category): ?>

              <li><a href="<?=BASE_URL . 'category.php?id=' . $category['id']?>"><?=$category['name']?></a></li>

              <?php endforeach; ?>
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