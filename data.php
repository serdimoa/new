<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 03.01.15
 * Time: 16:25
 */
session_start();
require_once("connector/data_connector.php");
$dbtype = "MySQL";
$conn = mysql_connect("localhost", "root", "27051993");//dev
//$conn = mysql_connect("localhost", "root", "FTuRhnYc13q4");//serv
mysql_select_db("aisyodbd");
$data = new JSONDataConnector($conn, $dbtype);
ConnectorSecurity::$xss = DHX_SECURITY_SAFEHTML;
ConnectorSecurity::$xss = DHX_SECURITY_TRUSTED;
$login = $_GET["login_post"];
$passwords = $_GET["password_post"];
$SQL = "select * from admins where adminName='".$login."'";
if($show = mysql_query($SQL)){
    $a=mysql_fetch_array($show);
    if($a['password'] != $passwords){
        echo "1";
    }
    else{
        $_SESSION['login']=$login;
        $_SESSION['password']=$passwords;
        echo "0";
    }
}
else
    echo "3";
?>