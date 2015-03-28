<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 24.03.15
 * Time: 12:40
 */


require_once("../config.php");
$data = new JSONDataConnector($conn, $dbtype);

$ids = $_GET['ides'];
$data->render_sql("SELECT `id`,`idkont`,`idsmena` FROM `childtocon` WHERE idchild=$ids", "id", 'id,idkont,idsmena');



?>