<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 13:12
 */

    require_once("../config.php");
$gets = $_GET["vals"];
$gets2 = $_GET["vals2"];
$sql = "select contract.id,contract.name from contract where contract.id in (SELECT periods.idcontract FROM periods ) AND contract.whens='$gets' AND contract.types ='$gets2'";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id"=>$row['id'],'value'=>$row['name']);
    }
    echo json_encode($arr);




?>