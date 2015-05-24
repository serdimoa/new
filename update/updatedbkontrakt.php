<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 23.01.15
 * Time: 18:52
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else
{
    require_once("../config.php");
    $nameinp=$_GET["nameinp"];
    $put=$_GET["put"];
    $price=$_GET["price"];
    $days=$_GET["days"];
    $date=$_GET["date"];
    $ids=$_GET["ids"];
    $whens = $_GET["whens"];
    $types = $_GET["types"];
    $daysprice = $_GET["daysprice"];
    $sql1 = "update contract set name='$nameinp',types='$types',put='$put',price='$price',
    days='$days',date='$date',daysprice='$daysprice',whens='$whens' where id='$ids'";
        if(mysql_query($sql1)){
            echo "0";
        }
        else
        {
            echo "1";
        }


}



?>
