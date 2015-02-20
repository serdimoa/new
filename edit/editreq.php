<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 13.02.15
 * Time: 17:51
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
{
    require_once("../config.php");
    $id=$_GET["ids"];
    $edit=$_GET[""];



}