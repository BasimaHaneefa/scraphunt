<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
ob_start();
include("Head.php");

$selQry="SELECT * from tbl_shop s inner join tbl_place p on p.place_id=s.place_id inner join tbl_district d on d.district_id=p.district_id where s.place_id='".$_SESSION["pid"]."'";
$data=$Conn->query($selQry);
while($row=$data->fetch_assoc())
{

?>
<table border="1" align="center">
<tr>
<td align="center"><img src="../Assets/Files/photo/<?php echo $row["shop_photo"] ?>" width="150" height="150" /><br />
<?php echo $row["shop_name"] ?><br />
<?php echo $row["shop_contact"] ?><br />
<?php echo $row["shop_email"] ?><br />
<?php echo $row["shop_address"] ?><br />
<?php echo $row["district_name"] ?><br />
<?php echo $row["place_name"] ?><br />
<a href="Request.php?sid=<?php echo $row["shop_id"]  ?>" style="color:blue">Request</a></td>




</tr>
</table>
<?php
}
?>
</body>
<?php

include("Foot.php");
ob_flush();
?>
</html>