<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 29.01.15
 * Time: 18:22
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
    $sql1 = "SELECT SUM(summ) FROM periods WHERE idcontract={$id}";
    $show = mysql_query($sql1);
    $arr = array();
    $row = mysql_fetch_array($show);
	$arr[] = Array("summ"=>$row["SUM(summ)"]);
    echo json_encode($arr);

}
?>