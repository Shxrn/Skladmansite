<?php

include SITE_ROOT . "/app/database/database.php";

if (!$_SESSION){
    header('location: ' . BASE_URL . 'log.php');
}



$errMsg = [];
$id='';
$title='';
$content='';
$category='';
$price='';
$sum='';
$categories = selectAll('categories');
$products = selectAll('products');
$productsCtg = selectAllFromPostsWithCategories('products', 'categories');


//Код для формы создания товара
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])){

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\product\\" . $imgName;

        if (strpos($fileType, 'image') === false){
            array_push($errMsg, "Можно загружать только изображения.");
        }
        else{
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result){
                $_POST['img'] = $imgName;
            }else{
                array_push($errMsg, "Ошибка загрузки изображения на сервер");
            }
        }
    }else{
        array_push($errMsg, "Ошибка получения картинки"); 
    }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);
    $price = trim($_POST['price']);
    $sum = trim($_POST['sum']);

    $putUp = isset($_POST['putUp']) ? 1 : 0;

    if($title=== '' || $content === '' || $category === '' || $price === '' || $sum === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }elseif(mb_strlen($title, 'UTF8') < 3){
        array_push($errMsg, "Название должено быть не короче трех символов.");
    }
    else{
        $product = [
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'sum' => $sum,
            'img' => $_POST['img'],
            'id_category' => $category,
            'status' => $putUp

        ];

        $product = insert('products', $product);
        $product = selectOne('products', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/products/index.php');
          
    } 
}
else{
    $id ='';
    $title = '';
    $content = '';
}


//редактирование товара

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $product = selectOne('products', ['id' => $id]);


    $id = $product['id'];
    $title = $product['title'];
    $content = $product['content'];
    $category = $product['id_category'];
    $price = $product['price'];
    $sum = $product['sum'];
    $putUp = $product['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_product'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);
    $price = trim($_POST['price']);
    $sum = trim($_POST['sum']);
    $putUp = $_POST['putUp'];

    if(!empty($_FILES['img']['name'])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\product\\" . $imgName;

        if (strpos($fileType, 'image') === false){
            array_push($errMsg, "Можно загружать только изображения.");
        }
        else{
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result){
                $_POST['img'] = $imgName;
            }else{
                array_push($errMsg, "Ошибка загрузки изображения на сервер");
            }
        }
    }else{
        array_push($errMsg, "Ошибка получения картинки"); 
    }


    if($title=== '' || $content === '' ){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($title, 'UTF8') < 3){
        $errMsg = "Товар должен быть не короче трех символов.";
    }
    else{

        $product = [
            'title' => $title,
            'content' => $content,
            'id_category' => $category,
            'price' => $price,
            'img' => $_POST['img'],
            'sum' => $sum,
            'status' => $putUp

        ];
        $id = $_POST['id'];
        $product = update('products', $id, $product);
        header('location: ' . BASE_URL . 'admin/products/index.php');
    }   
    
}

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $putUp = $_GET['putUp'];
    $productId = update('products', $id, ['status' => $putUp]); 
    header('location: ' . BASE_URL . 'admin/products/index.php');
    exit();
} 


//удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('products', $id); 
    header('location: ' . BASE_URL . 'admin/products/index.php');
} 


