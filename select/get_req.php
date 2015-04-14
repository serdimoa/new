<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 29.01.15
 * Time: 18:22
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.html');
    exit();
}else
{
    require_once("../config.php");
    $data = new JSONDataConnector($conn, $dbtype);
    $data->render_table("requests", "id", "id,status,year,date,type,time,whens,timeobj");
}
?>