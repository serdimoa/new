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
    require_once("config.php");
    $nameinp=$_GET["nameinp"];
    $fioinp=$_GET["fioinp"];
    $lastinp=$_GET["lastinp"];
    $svid=$_GET["svid"];
    $adrregs=$_GET["adrregs"];
    $adrfact=$_GET["adrfact"];
    $classname=$_GET["classname"];
    $fioroditelya=$_GET["fioroditelya"];
    $workstation=$_GET["workstation"];
    $rabotainp=$_GET["rabotainp"];
    $homeinp=$_GET["homeinp"];
    $mobilinp=$_GET["mobilinp"];
    $emailinp=$_GET["emailinp"];
    $date=$_GET["date"];
    $school=$_GET["school"];
    $lgotkats=$_GET["lgotkats"];

    $sql1 = "insert into children(name,firstname,surname,date) value ('$nameinp','$fioinp','$lastinp','$date')";
    mysql_query($sql1) ;
    $ids = mysql_insert_id();
    $sql2 = "insert into aboutchildren(iduser,doc,adr,adrfact,scholl,class,fioroditelya,workstation,katlgot,rabota,
             home,mobile,email) values ('$ids','$svid','$adrregs','$adrfact','$school','$classname','$fioroditelya',
             '$workstation','$lgotkats','$rabotainp','$homeinp','$mobilinp','$emailinp')";
    if(mysql_query($sql2)){
        return "0";
    }
    else
    {
        return "1";
    }






}



?>