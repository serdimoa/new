<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.01.15
 * Time: 13:03
 */
require_once("connector/data_connector.php");
$dbtype = "MySQL";
$conn = mysql_connect("localhost","root","27051993");
ConnectorSecurity::$security_key = true;
ConnectorSecurity::$xss = DHX_SECURITY_SAFEHTML;
ConnectorSecurity::$xss = DHX_SECURITY_TRUSTED;
mysql_select_db("aisyodbd");

?>