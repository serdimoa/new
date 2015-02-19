<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 18:02
 */
require_once("config.php");
$data = new JSONDataConnector($conn, $dbtype);
$ids = $_GET['ides'];
$data->render_sql("select * from requests_user where iduser='".$ids."'","id",'id,status,year,date,type,time,timeobj');
?>