<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 02.04.15
 * Time: 2:42
 */
include_once("../config.php");
$sql = "select * from periods where 1";
$show = mysql_query($sql);
$arr = array();
while ($row = mysql_fetch_array($show)) {
    $arr[] = Array("id" => $row['id'], 'valuers' => $row['number']);
}
echo json_encode($arr);




?>