<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 02.04.15
 * Time: 2:57
 */
session_start();

session_destroy();
echo $twig->render("index.html.twig");
?>