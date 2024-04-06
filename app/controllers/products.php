<?php

include SITE_ROOT . "/app/database/database.php";
$errMsg = '';
$id='';
$title='';
$content='';
$category='';
$price='';
$sum='';
$categories = selectAll('categories');


//Код для формы создания товара
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $category = trim($_POST['category']);
    $price = trim($_POST['price']);
    $sum = trim($_POST['sum']);

    if($title=== '' || $content === '' || $category === '' || $price === '' || $sum === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($title, 'UTF8') < 3){
        $errMsg = "Название должено быть не короче трех символов.";
    }
    else{
        $product = [
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'sum' => $sum,
            'img' => $_POST['img'],
            'id_category' => $category,
            'status' => 1

        ];
        $product = insert('products', $product);
        $product = selectOne('products', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/products/index.php');
          
    } 
}
else{
    $title = '';
    $content = '';
}


/* //редактирование категорий

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $category = selectOne('categories', ['id' => $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-edit'])){

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name=== '' || $description === '' ){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($name, 'UTF8') < 3){
        $errMsg = "Категория должена быть не короче трех символов.";
    }
    else{

        $category = [
            'name' => $name,
            'description' => $description

        ];
        $id = $_POST['id'];
        $category_id = update('categories', $id, $category);
        header('location: ' . BASE_URL . 'admin/categories/index.php');
    }   
    
}

//удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    delete('categories', $id); 
    header('location: ' . BASE_URL . 'admin/categories/index.php');
} */
