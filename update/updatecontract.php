<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 15.08.2015
 * Time: 17:59
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else {
    require_once("../config.php");

    if(isset($_POST['categories'])) {
        $json = $_POST['categories'];
        $phpArray = json_decode($json);
        $namber = $phpArray[0]->namber;
        $date = $phpArray[0]->date;
        $summ = $phpArray[0]->summ;
        $price = $phpArray[0]->price;
        $pricebyday = $phpArray[0]->pricebyday;
        $id = $phpArray[0]->id;
        $sql="UPDATE kontractdetail SET
  namber = '$namber',
  date='$date',
  summ='$summ',
  price='$price',
  pricebyday='$pricebyday'  WHERE id =' $id'";
        mysql_query($sql);
        echo "Данные обновлены";

    } else {
        echo "Произошла ошибка";
    }

}