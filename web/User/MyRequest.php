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



?>
<table width="200" border="1" align="center">
  <tr>
    <td>Sl.no</td>
    <td>Shop</td>
    <td>Address</td>
    <td>Category</td>
    <td>Rate</td>
    <td>Qty</td>
    <td>Amount</td>
    <td>Pickup Date</td>
    <td>Pickup Time</td>
    <td>Requested Date</td>
    <td>Details</td>
    <td>Status</td>
  </tr>
  <?php
  $i=0;
 $Sel="select * from tbl_request r  inner join tbl_category c on c.Category_id=r.category_id inner join tbl_shop s on s.shop_id=r.shop_id WHERE user_id='".$_SESSION["uid"]."'";
  $data=$Conn->query($Sel);
  while($row=$data->fetch_assoc())
  {
	  $i++;
  ?>
  <tr>
    <td><?php  echo $i; ?></td>
    <td><?php  echo $row["shop_name"] ?></td>
    <td><?php  echo $row["shop_address"] ?></td>
    <td><?php  echo $row["Category_name"] ?></td>
    <td><?php  echo $row["scrap_rate"] ?></td>
    <td><?php  echo $row["request_qty"] ?></td>
    <td><?php  echo $row["request_amount"] ?></td>
    <td><?php  echo $row["request_scheduledate"] ?></td>
    <td><?php  echo $row["request_scheduletime"] ?></td>
    <td><?php  echo $row["request_date"] ?></td>
    <td><?php  echo $row["request_details"] ?></td>
    <td><?php  
	if($row['request_status']==0 && $row['request_paystatus']==0)
	{
	echo "Request is processing";	
	}else if($row['request_status']==1 && $row['request_paystatus']==0)
	{
	echo " Accepted to pickup";	
	}
  else if($row['request_status']==3 && $row['request_paystatus']==0)
	{
	echo "Picked up the scrap";	
	}
	else if($row['request_status']==3 && $row['request_paystatus']==1)
	{
	echo "Got the payment";	
	}
	else
	{
	echo "Rejected";	
	}
	?></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
<?php

include("Foot.php");
ob_flush();
?>
</html>