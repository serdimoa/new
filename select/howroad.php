<?php

    require_once("../config.php");
    $sql = "select * from howroad";
    $show = mysql_query($sql);
    $arr = array();
    while($row = mysql_fetch_array($show)){
        $arr[] = Array("id"=>$row['id'],'value'=>$row['name']);
    }
    echo json_encode($arr);




?>