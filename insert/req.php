<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 21.01.15
 * Time: 14:30
 */
include_once('../config.php');
$fio=$_GET['fio'];
$name=$_GET['name'];
$othc=$_GET['othc'];
$dates=$_GET['date'];
$doc=$_GET['doc'];
$resttype=$_GET['resttype'];
$resttime=$_GET['resttime'];
$resttimeobj=$_GET['resttimeobj'];
$fiorod=$_GET['fiorod'];
$workstation=$_GET['workstation'];
$whens = $_GET['whens'];
$tel=$_GET['tel'];
$year=date("Y");
$dater = date("Y-m-d");


$sql = "insert into requests(status,year,date,time,timeobj,whens,type) values (1,'$year','$dater','$resttime','$resttimeobj','$whens','$resttype')";
mysql_query($sql);
$ids = mysql_insert_id();
$sql2="insert into request_children(name,fio,otch,date,doc,fiorod,workstation,tel,idrequests) values ('$name','$fio','$othc','$dates','$doc','$fiorod','$workstation','$tel','$ids')";
if(mysql_query($sql2 )){
    echo "1";
}
else{
    echo "0";
}
?>





