<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 15.08.2015
 * Time: 14:25
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}else {
    require_once("../config.php");
    $data = new JSONDataConnector($conn, $dbtype);
    $ids = $_GET['ides'];
    $data->render_sql("select * from  kontractdetail where idsmena='" . $ids . "'", "id", 'id,namber,date,summ,price,pricebyday');
}