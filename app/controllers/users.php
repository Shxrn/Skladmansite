<?php
include "app/database/database.php";

$errMsg = '';

//код для формы регистрации

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);
    $patronymic = trim($_POST['patronymic']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);

    if($login === '' || $email === '' || $passF === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif(mb_strlen($login, 'UTF8') < 3){
        $errMsg = "Логин должен быть не короче трех символов.";
    }elseif($passF !== $passS){
        $errMsg = "Пароли в обеих полях должны соответствовать!";
    }
    else{

        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = "Пользователь с такой почтой уже зарегистрирован!";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'lastname' => $lastname,
                'firstname' => $firstname,
                'patronymic' => $patronymic,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . admin/admin.php);
            }
            else{
                header('location: ' . BASE_URL);
            }
            header('location: ' . BASE_URL);
        }   
    } 
}
else{
    $login = '';
    $lastname = '';
    $firstname = '';
    $patronymic = '';
    $email = '';
}

//код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }
    else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($pass, $existence['password'])){

            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];

            if($_SESSION['admin']){
                header('location: ' . BASE_URL . "admin/products/index.php");
            }
            else{
                header('location: ' . BASE_URL);
            }
        }else{
            $errMsg = 'Почта либо пароль введены неверно!';
        }
    }
}
else{
    $email='';
}