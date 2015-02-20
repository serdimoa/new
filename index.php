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
if($namepage){
echo $twig->render("$namepage.html");
}
else{
    if(!$_SESSION["login"]){
        echo $twig->render("index.html");
    }
    else{
        echo $twig->render("good.html");
    }
    
}
?>
