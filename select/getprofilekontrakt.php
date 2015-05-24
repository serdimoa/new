<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 22.01.15
 * Time: 17:42
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
    $sql1 = "select * from contract where id={$id}";
    $show = mysql_query($sql1);
    $arr = array();
    $row = mysql_fetch_array($show);
    $arr[] = Array("id"=>$row['id'],"name"=>$row['name'],"put"=>$row['put'],"price"=>$row['price'],
    "days"=>$row['days'],"date"=>$row['date'],"types"=>$row['types'],"daysprice"=>$row['daysprice'],"whens"=>$row["whens"]);

    echo json_encode($arr);


}
?>
