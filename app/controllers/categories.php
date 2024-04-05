<?php

include "../../app/database/database.php";
$errMsg = '';


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