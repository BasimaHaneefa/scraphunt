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


if(isset($_GET["rid"]))
{
    $up="update tbl_request set request_status=2 where request_id='".$_GET["rid"]."'";
    $Conn->query($up);
    header("location:AcceptedRequest.php");
}
if(isset($_GET["srid"]))
{
    $up1="update tbl_request set request_status=3 where request_id='".$_GET["srid"]."'";
    $Conn->query($up1);
    header("location:AcceptedRequest.php");
}
?>
<h3 align="center">Accepted Request</h3>
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
 $Sel="select * from tbl_request r  inner join tbl_category c on c.Category_id=r.category_id inner join tbl_user s on s.user_id=r.user_id WHERE shop_id='".$_SESSION["sid"]."' and request_status=1 or request_status=3";
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
    <td><?php
    if($row['request_status']==1 && $row['request_paystatus']==0)
    {
    ?>
    <a href="AcceptedRequest.php?srid=<?php echo $row['request_id'] ?>">Picked up</a>
    <a href="AcceptedRequest.php?rid=<?php echo $row['request_id'] ?>">Reject</a>
    <?php
    } else if($row['request_status']==3 && $row['request_paystatus']==0)
    {
        echo "Pickup Completed ";
        ?>
        <a href="Payment.php?bid=<?php echo $row['request_id'] ?>">Pay Now</a></td>
        <?php
    }else if($row['request_status']==3 && $row['request_paystatus']==1)
    {
        echo "Payment and Request Completed ";
    }
    ?></td>
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