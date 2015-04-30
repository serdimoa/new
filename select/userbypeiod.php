<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 29.03.15
 * Time: 0:49
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else {
    require_once("../config.php");
    $id = $_GET["id"];
    $smena = $_GET["smena"];
    $sql = "SELECT children.id, children.name, children.firstname, children.surname FROM children WHERE children.id in (select childtocon.idchild FROM childtocon WHERE childtocon.idkont=$id AND childtocon.idsmena=$smena)";
    $show = mysql_query($sql);
    while($row = mysql_fetch_array($show)){
        $arr[] = Array(
            "idchild"=>$row['id'],
            "fio"=>$row['firstname'],
            "name"=>$row['name'],
            "last"=>$row['surname'],

            );
    }
    echo json_encode($arr);


}