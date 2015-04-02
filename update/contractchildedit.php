<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 31.03.15
 * Time: 1:46
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else {
    require_once("../config.php");
    $id = $_GET["id"];
    $ogid = $_GET["ogid"];
    switch ($ogid) {
        case 1:
            $sql = "update childtocon set status='1' where id='$id' ";
            mysql_query($sql);
            break;
        case 2:
            $sql2 = "update childtocon set status='2' where id='$id' ";
            mysql_query($sql2);
            break;
        case 3:
            $sql3 = "delete from childtocon where id='$id' ";
            mysql_query($sql3);
            break;

        default:
            echo "default";
            break;
    }
}