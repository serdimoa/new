<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 27.01.15
 * Time: 17:44
 */

    include_once("../config.php");
    $sql = "select * from resttype where 1";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id" =>$row['id'],'value'=>$row['name']);
    }
    echo json_encode($arr);


?>