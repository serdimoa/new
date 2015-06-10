<?php
/**
 * Created by PhpStorm.
 * User: serdimoa
 * Date: 24.03.15
 * Time: 12:40
 */


require_once("../config.php");

$ids = $_GET['ides'];
$sql = "SELECT childtocon.id, contract.name, periods.number,childtocon.status
FROM childtocon
INNER JOIN contract
ON childtocon.idkont=contract.id
INNER JOIN periods
ON childtocon.idsmena=periods.id where idchild=$ids ";

//SELECT `id`,`idkont`,`idsmena`,`status` FROM `childtocon` WHERE idchild=$ids
$show = mysql_query($sql);
$rows = array();
while ($row = mysql_fetch_array($show)){
$rows[] = Array("id"=>$row['id'],"idkont"=>$row['name'],"idsmena"=>$row['number'],"status"=>$row['status']);
}
echo json_encode($rows);





?>