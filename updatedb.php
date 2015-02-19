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
    $ids=$_GET["ids"];
    $statusinps = $_GET["statusinps"];
    $find = "select id from aboutchildren where iduser='$ids'";
    $show = mysql_query($find);

    $sql2 = "update children set name='$nameinp',firstname='$fioinp',surname='$lastinp',date='$date' where id='$ids'";
    if(mysql_fetch_array($show)==Null){
        $sql1 = "insert into aboutchildren(iduser,doc,adr,adrfact,scholl,class,fioroditelya,workstation,katlgot,rabota,
        home,mobile,email) values ('$ids','$svid','$adrregs','$adrfact','$school','$classname','$fioroditelya',
        '$workstation','$lgotkats','$rabotainp','$homeinp','$mobilinp','$emailinp')";
        if(mysql_query($sql2) && mysql_query($sql1)){
            echo "0";
        }
        else
        {
            echo "1";
        }
    }
    else{
        $sql1 = "update aboutchildren set doc='$svid',adr='$adrregs',adrfact='$adrfact',scholl='$school',
                 class='$classname',fioroditelya='$fioroditelya',workstation='$workstation',katlgot='$lgotkats',
                 rabota='$rabotainp',home='$homeinp',mobile='$mobilinp',email='$emailinp' where iduser='$ids'";
        if(mysql_query($sql2) && mysql_query($sql1)){
            echo "0";
        }
        else
        {
            echo "1";
        }


    }


}



?>