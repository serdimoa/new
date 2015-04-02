<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 13:12
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else
{
    require_once("../config.php");
    $sql = "select * from contract";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id"=>$row['id'],'value'=>$row['name']);
    }
    echo json_encode($arr);



}
?>