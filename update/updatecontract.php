<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 15.08.2015
 * Time: 17:59
 */

session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
}
else {
    require_once("../config.php");

}