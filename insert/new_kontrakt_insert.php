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
    $fioinp=$_GET["fioinp"];
    $lastinp=$_GET["lastinp"];
    $svid=$_GET["svid"];
    $date=$_GET["date"];
    $types = $_GET['types'];
    $sql1 = "insert into contract(name,put,price,types,days,date) value ('$nameinp','$fioinp','$lastinp','$types','$svid','$date')";
     if(mysql_query($sql1)){
        return "0";
    }
    else
    {
        return "1";
    }

}



?>
