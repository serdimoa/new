<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 16.02.15
 * Time: 15:40
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else
{
    require_once("../config.php");
$id = $_GET["id"];
$ogid = $_GET["ogid"];
switch ($ogid){
    case 1:
        $sql="update requests_user set status='1' where id='$id' ";
        mysql_query($sql);
        break;
    case 2:
        $sql2="update requests_user set status='2' where id='$id' ";
        mysql_query($sql2);
        break;
    case 3:
        $sql3="update requests_user set status='3' where id='$id' ";
        mysql_query($sql3);
        break;
    case 4:
        $sql4="update requests_user set status='4' where id='$id' ";
        mysql_query($sql4);
        break;
    default:
        echo "default";
        break;
}
}
