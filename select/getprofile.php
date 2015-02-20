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
    $sql1 = "select * from children where id={$id}";
    $sql2 = "select * from aboutchildren where iduser={$id}";
    $show = mysql_query($sql1);
    $show1 = mysql_query($sql2);
    $arr = array();
    $row = mysql_fetch_array($show);
    $row1 = mysql_fetch_array($show1);
    $arr[] = Array("id"=>$row['id'],"name"=>$row['name'],"firstname"=>$row['firstname'],"surname"=>$row['surname'],
        "date"=>$row['date'],"doc"=>$row1['doc'],"adr"=>$row1['adr'],"adrfact"=>$row1['adrfact'],"scholl"=>$row1['scholl'],
        "class"=>$row1['class'],"fioroditelya"=>$row1['fioroditelya'],"workstation"=>$row1['workstation'],
        "katlgot"=>$row1['katlgot'],"rabota"=>$row1['rabota'],"home"=>$row1['home'],"mobile"=>$row1['mobile'],
        "email"=>$row1['email']);

    echo json_encode($arr);


}
?>