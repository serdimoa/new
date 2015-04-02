<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 31.03.15
 * Time: 0:47
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else {
    require_once("../config.php");
    $val1 = $_GET['val1'];
    $val2 = $_GET['val2'];
    $val3 = $_GET['val3'];
    $sql1 = "insert into childtocon(idchild,idkont,idsmena) values ('$val1','$val2','$val3')";
    $sql2 = "update periods set nerasp = nerasp-1 WHERE idcontract=$val2 AND id=$val3";
    if(mysql_query($sql1)){
        mysql_query($sql2);
        return "0";
    }
    else
    {
        return "1";
    }


}