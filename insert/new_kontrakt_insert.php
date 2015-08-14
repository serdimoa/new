<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 23.01.15
 * Time: 18:52
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else
{
    require_once("../config.php");
    $nameinp=$_GET["nameinp"];

    $whens = $_GET["whens"];
    $types = $_GET['types'];

    $sql1 = "insert into contract(name,types,whens) value ('$nameinp','$types','$whens')";
     if(mysql_query($sql1)){
        return "0";
    }
    else
    {
        return "1";
    }

}



?>
