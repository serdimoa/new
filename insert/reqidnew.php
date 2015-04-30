<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 23.02.15
 * Time: 18:15
 */
include_once('../config.php');

$resttype=$_GET['resttype'];
$resttime=$_GET['resttime'];
$resttimeobj=$_GET['resttimeobj'];
$year=date("Y");
$dater = date("Y-m-d");
$iduser=$_GET['iduser'];
$sql="insert into requests_user(status,year,date,type,time,timeobj,iduser) values (1,'$year','$dater','$resttype','$resttime','$resttimeobj','$iduser')";
if(mysql_query($sql)){
    echo "1";
}
else{
    echo "0";
}
