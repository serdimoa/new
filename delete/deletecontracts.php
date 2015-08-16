<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 17.08.15
 * Time: 1:46
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else{
    require_once("../config.php");
    $json = $_POST['categories'];
    $sql ="DELETE FROM kontractdetail WHERE id = '$json'";
    if(mysql_query($sql)){
        echo "Удалено";
    }
    else
    {
        echo "Произошла ошибка";
    }

}
