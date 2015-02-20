<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 02.02.15
 * Time: 15:58
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else
{
    $id = $_GET["id"];
    require_once("../config.php");
    $sql1 = "select * from request_children where idrequests={$id}";
    $show = mysql_query($sql1);
    $arr = array();
    $row = mysql_fetch_array($show);
    $arr[] = Array(
        "id"=>$row['id'],
        "name"=>$row['name'],
        "firstname"=>$row['fio'],
        "surname"=>$row['otch'],
        "date"=>$row['date'],
        "doc"=>$row['doc'],
        "fiorod"=>$row['fiorod'],
        "workstation"=>$row['workstation'],
        "tel"=>$row['tel']);

    echo json_encode($arr);

}
?>