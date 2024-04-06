<?php

include SITE_ROOT . "/app/database/database.php";
$errMsg = '';
$id='';
$name='';
$description='';
$categories = selectAll('categories');



if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-create'])){

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name=== '' || $description === '' ){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($name, 'UTF8') < 3){
        $errMsg = "Категория должена быть не короче трех символов.";
    }
    else{

        $existence = selectOne('categories', ['name' => $name]);
        if (!empty($existence['name']) && $existence['name'] === $name){
            $errMsg = "Такая категория уже есть в базе данных!";
        }else{
            $category = [
                'name' => $name,
                'description' => $description

            ];
            $id = insert('categories', $category);
            $category = selectOne('categories', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/categories/index.php');
        }   
    } 
}
else{
    $name = '';
    $description = '';
}


//редактирование категорий

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
}
