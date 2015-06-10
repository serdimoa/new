<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 05.06.15
 * Time: 16:48
 */

require_once("../config.php");
$data = new JSONDataConnector($conn, $dbtype);
$ids = $_GET['ides'];
$data->render_sql("select * from periods where id='".$ids."'","id",'id,startdate,enddate,summ,nerasp,number');
