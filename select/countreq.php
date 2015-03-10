<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 10.03.15
 * Time: 18:26
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
} else {
    $arr = array();
    require_once("../config.php");
    $sql = 'SELECT COUNT(*) FROM aisyodbd.requests';
    $num = mysql_query($sql);
    $row = mysql_fetch_array($num);

    echo $row["COUNT(*)"];

}
?>