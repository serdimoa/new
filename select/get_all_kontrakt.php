<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 13:12
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else
{
require_once("../config.php");
    $data = new JSONDataConnector($conn, $dbtype);

    $data->render_table("contract","id","id, name");


}
?>
