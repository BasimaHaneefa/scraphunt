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

if(isset($_GET["aid"]))
{
    $update="update tbl_request set request_status=1 where request_id='".$_GET["aid"]."'";
    $Conn->query($update);
    header("location:RejectedRequest.php");
}

?>
<h3 align="center">Rejected Request</h3>
<table width="200" border="1" align="center">
  <tr>
    <td>Sl.no</td>
    <td>Customer</td>
    <td>Address</td>
    <td>Contact</td>
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
 $Sel="select * from tbl_request r  inner join tbl_category c on c.Category_id=r.category_id inner join tbl_user s on s.user_id=r.user_id WHERE shop_id='".$_SESSION["sid"]."' and request_status=2";
  $data=$Conn->query($Sel);
  while($row=$data->fetch_assoc())
  {
	  $i++;
  ?>
  <tr>
    <td><?php  echo $i; ?></td>
    <td><?php  echo $row["user_name"] ?></td>
    <td><?php  echo $row["user_address"] ?></td>
    <td><?php  echo $row["user_contact"] ?></td>
    <td><?php  echo $row["Category_name"] ?></td>
    <td><?php  echo $row["scrap_rate"] ?></td>
    <td><?php  echo $row["request_qty"] ?></td>
    <td><?php  echo $row["request_amount"] ?></td>
    <td><?php  echo $row["request_scheduledate"] ?></td>
    <td><?php  echo $row["request_scheduletime"] ?></td>
    <td><?php  echo $row["request_date"] ?></td>
    <td><?php  echo $row["request_details"] ?></td>
    <td><a href="RejectedRequest.php?aid=<?php echo $row['request_id'] ?>">Accept</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</body>
<br>
<?php
include("Foot.php");
ob_flush();
?>
</html>