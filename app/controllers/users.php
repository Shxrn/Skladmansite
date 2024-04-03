<?php
include "app/database/database.php";

$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
            $errMsg = "Пользователь " . "<strong>" . $login . "</strong>" . " успешно зарегистрирован!";
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