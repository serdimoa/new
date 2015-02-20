<?php
session_start();
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));
$namepage = $_GET['np'];
if(!$_SESSION["login"]){
        echo $twig->render("index.html");
    }
    else{
      if($namepage){
      echo $twig->render("$namepage.html");
      }
      else{
        echo $twig->render("good.html");
    }

}
?>
