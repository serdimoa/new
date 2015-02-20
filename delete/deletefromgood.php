<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 16.02.15
 * Time: 15:06
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else{
    require_once("../config.php");
    $id=$_GET["id"];
    $sql1 ="delete from children where id='$id'";
    $sql2 ="delete from aboutchildren where iduser='$id'";
    mysql_query($sql1);
    mysql_query($sql2);
}
?>