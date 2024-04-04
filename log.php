<?php include("path.php"); 
      //include("app/database/database.php");
      include("app/controllers/users.php");
?>

<!doctype html>
<html lang="ru">
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

    <!--Форма-->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="log.php">
            <h2>Авторизация</h2>
            <div class="mb-3 col-12 col-md-4 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="formGroupExampleInput" class="form-label">Ваша почта</label>
                <input name="email" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="w-100"></div>
            <div class="md-3 col-12 col-md-4">
                <button type="submit" class="btn btn-light" name="button-log">Войти</button>
                <a href="reg.php">Зарегистрироваться</a>
            </div>
        </form>
    </div>
    <!--Конец формы-->

    <?php include("app/inc/footer.php"); ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/75844c3e5b.js" crossorigin="anonymous"></script>
    </body>
</html>