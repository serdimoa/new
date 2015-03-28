<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 24.03.15
 * Time: 12:25
 */
include_once("../config.php");
$sql = "select * from contract where 1";
$show = mysql_query($sql);
$arr = array();
while ($row = mysql_fetch_array($show)) {
    $arr[] = Array("id" => $row['id'], 'valuers' => $row['name']);
}
echo json_encode($arr);
