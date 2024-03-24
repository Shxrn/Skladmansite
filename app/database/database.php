<?php

require('connect.php');


function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

//проверка выполнения запроса к базе
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if ($errInfo[0]!== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
}

//запрос на получение данных с таблицы
function selectAll($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i ===0){
                $sql = $sql . " WHERE $key=$value";
            }
            else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $query = $pdo->prepare($sql); //подготовка
    $query->execute(); //выполнение

    dbCheckError($query);

    return $query->fetchAll(); //возвращение значения
}

function selectOne($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i ===0){
                $sql = $sql . " WHERE $key=$value";
            }
            else{
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
    $sql = $sql . " LIMIT 1";

    //tt($sql);
    //exit();
    $query = $pdo->prepare($sql); //подготовка
    $query->execute(); //выполнение

    dbCheckError($query);

    return $query->fetch(); //возвращение значения
}

$params = [
    'admin'=> 1,
    'username'=> 'IluxaMad'
];

//tt(selectAll('users', $params));
tt(selectOne('users', $params));
