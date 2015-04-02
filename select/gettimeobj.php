<?php
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else
{
    require_once("../config.php");
    $idcontract = $_GET['idcontract'];
    $sql = "select * from periods WHERE idcontract=$idcontract AND nerasp!=0";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id"=>$row['id'],'value'=>$row['number']);
    }
    echo json_encode($arr);



}
?>