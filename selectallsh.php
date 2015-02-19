<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 26.01.15
 * Time: 17:12
 */
$ids = $_GET['id'];
$conn = mysql_connect("localhost","root","27051993");
mysql_select_db("aisyodbd");
$qeury = "select * from scholl where id ='$ids'";
$qeury1 = mysql_query($qeury);
$qeury2 = mysql_fetch_array($qeury1);
$qeury3 = $qeury2['name'];
echo "<input value='$qeury3'/>";
?>
