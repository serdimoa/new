<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 29.01.15
 * Time: 18:22
 */

require_once("../config.php");
$data = new JSONDataConnector($conn, $dbtype);
$data->render_table("whens", "id", "id,value");

?>