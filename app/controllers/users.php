<?php
include "app/database/database.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo 'POST';
}
else{
    echo 'GET';
}


if (isset($_POST['login'])){
    $login = $_POST['login'];
    $lastname = trim($_POST['lastname']);
    $firstname = trim($_POST['firstname']);
    $patronymic = trim($_POST['patronymic']);
    $email = trim($_POST['email']);
    $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
    $admin = 0;

    $post = [
        'admin' => $admin,
        'username' => $login,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'patronymic' => $patronymic,
        'email' => $email,
        'password' => $pass
    ];

    //$id = insert('users', $post);
    //$last_row = selectOne('users', ['id' => $id]);

    //tt($last_row);
}