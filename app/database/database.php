<?php

session_start();
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
    $query = $pdo->prepare($sql); //подготовка
    $query->execute(); //выполнение

    dbCheckError($query);

    return $query->fetch(); //возвращение значения
}

//запись в таблицу
function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key =>$value){
       if ($i===0){
        $coll = $coll . "$key";
        $mask = $mask . "'". "$value". "'";
       }
       else{
        $coll = $coll . ", $key";
        $mask = $mask . ", '". "$value" . "'";
       }
       $i++;
    
    }


    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    //tt($sql);
    //exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $pdo->lastInsertId();
}

//обновление данных в таблице
function update($table, $id, $params){
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key =>$value){
       if ($i===0){
        $str = $str . $key . "= '". $value. "'";
       }
       else{
        $str = $str .", " . $key . "= '". $value . "'";
       }
       $i++;
    
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

function delete($table, $id){
    global $pdo;
    $sql = "DELETE FROM $table WHERE id =". $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

//выборка категорий в админку
function selectAllFromPostsWithCategories($table1, $table2){
    global $pdo;

    $sql = "SELECT t1.id, t1.title, t1.img, t1.content, t1.status, t1.price, t1.sum, t2.name  FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_category = t2.id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

function selectAllFromPostsWithCategoriesOnIndex($table1, $table2){
    global $pdo;

    $sql = "SELECT p.*, c.name FROM $table1 AS p JOIN $table2 AS c ON p.id_category = c.id WHERE p.status=1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

//поиск по заголовкам
function searchInTitle($text, $table1, $table2){
    $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));
    global $pdo;

    $sql = "SELECT p.*, c.name FROM $table1 AS p JOIN $table2 AS c ON p.id_category = c.id WHERE p.status=1 AND p.title LIKE '%$text%'";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

//выборка записи для одной страницы
function selectAllFromPostsWithCategoriesOnIndexSingle($table1, $table2, $id){
    global $pdo;

    $sql = "SELECT p.*, c.name FROM $table1 AS p JOIN $table2 AS c ON p.id_category = c.id WHERE p.id=$id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}