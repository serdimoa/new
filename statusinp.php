<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 21.01.15
 * Time: 12:54
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else
{
    require_once("config.php");
    $data = new JSONDataConnector($conn,$dbtype);
//    $data->

$filter = isset($_GET["filter"]) ? $_GET["filter"]["value"] : false;
$json = Array();
$max = 0;
for ($i = 0; $i < count($countries); $i++) {
    if ($filter===false || $filter === "" || strpos(strtolower($countries[$i]["name"]), strtolower($filter)) === 0) {
        $json[] = Array("id"=> $countries[$i]["id"],"value"=>$countries[$i]["name"] );
        if (++$max >= 10) break;
    }
}

echo json_encode($json);
}
?>