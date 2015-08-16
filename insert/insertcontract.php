<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 17.08.15
 * Time: 0:54
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else {
    require_once("../config.php");



        $namber = $_GET['namber'];
        $date = $_GET['date'];
        $summ = $_GET['summ'];
        $price = $_GET['price'];
        $pricebyday = $_GET['pricebyday'];
        $idsmena = $_GET['idsmena'];
        $sql="
        INSERT INTO kontractdetail
        (namber, date, summ, price, pricebyday, idsmena)
        VALUES
        ('$namber','$date','$summ','$price','$pricebyday','$idsmena')
        ";
    if(mysql_query($sql)){
        echo "Данные обновлены";
    }
    else {
        echo "Произошла ошибка";
    }

}