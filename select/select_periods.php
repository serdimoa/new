<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 18:02
 */
// CHANGED: EDIT SELECT FROM DATABASE CONTRACT PERIOD

require_once("../config.php");
$data = new JSONDataConnector($conn, $dbtype);
$ids = $_GET['ides'];
$data->render_sql("select * from periods where idcontract='".$ids."'","id",'id,startdate,enddate,summ,nerasp,number');
?>
