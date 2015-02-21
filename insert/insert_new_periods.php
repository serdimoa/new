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
    $startdate=$_GET["startdate"];
    $enddate=$_GET["enddate"];
    $summ=$_GET["summ"];
    $serial=$_GET["serial"];
    $number=$_GET["number"];
    $idcontract=$_GET["idcontract"];

    $sql1 = "insert into periods(startdate,enddate,summ,serial,number,idcontract) values ('$startdate','$enddate','$summ','$serial','$number','$idcontract')";
     if(mysql_query($sql1)){
        return "0";
    }
    else
    {
        return "1";
    }

}



?>
