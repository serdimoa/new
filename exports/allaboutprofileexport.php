<?php
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
} else {

    require "php-export-data.class.php";

    $directions = json_decode($_GET['json'], true);
    $excel = new ExportDataExcel('browser');

    $excel->filename = "test.xls";

    $excel->initialize();

    $row = array("Фамилия", "Имя", "Отчество");
    $excel->addRow($row);
    $row = array($directions["expfioinp"], $directions["expnameinp"], $directions["explastinp"]);
    $excel->addRow($row);


    $excel->finalize();

}
