<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 04.02.15
 * Time: 13:09
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else
{
    require_once("../config.php");
    $ide = $_GET["ids"];
    $nameinp=$_GET["nameinp"];
    $fioinp=$_GET["fioinp"];
    $lastinp=$_GET["lastinp"];
    $svid=$_GET["svid"];
    $fioroditelya=$_GET["fioroditelya"];
    $workstation=$_GET["workstation"];
    $mobilinp=$_GET["mobilinp"];
    $date=$_GET["date"];
    $scholl = $_GET["scholl"];
    $class = $_GET["class"];

    $sql1 = "insert into children(name,firstname,surname,date) value ('$nameinp','$fioinp','$lastinp','$date')";
    mysql_query($sql1) ;
    $ids = mysql_insert_id();
    $sql2 = "insert into aboutchildren(iduser,doc,fioroditelya,workstation,mobile,scholl,class)
              values ('$ids','$svid','$fioroditelya','$workstation','$mobilinp','$scholl','$class')";
    mysql_query($sql2);
        $ids2 = mysql_insert_id();
        $sql3="update requests set iduser='$ids' where id='$ide'";
    $sql4 = "insert into requests_user(status,year,date,kategory,type,iduser,time,timeobj,whens) select status,year,date,kategory,type,iduser,time,timeobj,whens from requests where id='$ide' ";
        $sql5="delete from request_children where idrequests='$ide'";
        $sql6="delete from requests where id='$ide'";
        mysql_query($sql3);
        mysql_query($sql4);
        mysql_query($sql5);
        mysql_query($sql6);
        return "0";



}