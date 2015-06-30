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
$sql = "SELECT children.id,children.name, children.firstname, children.surname, children.date, aboutchildren.doc FROM aboutchildren INNER JOIN children on aboutchildren.iduser = children.id";
$data->render_sql("$sql","id","name, firstname, surname, date,doc");


}
?>