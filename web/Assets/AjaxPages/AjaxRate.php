<?php
include("../Connection/Connection.php");

$selQry="select * from tbl_scraprate where category_id='".$_GET['pid']."'";
$row=$Conn->query($selQry);
$data=$row->fetch_assoc();
echo $data["scrap_rate"];
?>
