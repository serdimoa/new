<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 23.01.15
 * Time: 15:58
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else
{
    require_once("../config.php");
    $sql = "select * from katlgot";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id"=>$row['id'],'value'=>$row['name']);
    }
    echo json_encode($arr);



}
?>
